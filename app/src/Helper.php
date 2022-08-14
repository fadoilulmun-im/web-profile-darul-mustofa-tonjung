<?php

class Helper {
  static function checkExistingURLSegment($object, $url_segment){
    $class_name = get_class($object);
    return (DataObject::get_one($class_name, "URLSegment='".$url_segment."' AND ID !=".$object->ID));
  }

  static function createURLSegment($object){

    $class_name = get_class($object);

    // If there is no URLSegment set, generate one from Address
    if((!$object->URLSegment || $object->URLSegment == $class_name) && $object->Title != $class_name){
      //$object->URLSegment = SiteTree::generateURLSegment($object->Address);
      $segment = preg_replace('/[^A-Za-z0-9]+/','-',$object->Title);
      $segment = preg_replace('/-+/','-',$segment);
      $segment = strtolower($segment);
      $segment = trim($segment);
      $object->URLSegment = $segment;
    }

    else if($object->isChanged('Title')){
      // Make sure the URLSegment is valid for use in a URL
      $segment = preg_replace('/[^A-Za-z0-9]+/','-',$object->Title);
      $segment = preg_replace('/-+/','-',$segment);
      $segment = strtolower($segment);
      $segment = trim($segment);

      // If after sanitising there is no URLSegment, give it a reasonable default
      if(!$segment){
        $segment = strtolower($class_name)."-$object->ID";
      }
      $object->URLSegment = $segment;
    }

    // Ensure that this object has a non-conflicting URLSegment value.
    $count = 2;
    while(self::checkExistingURLSegment($object, $object->URLSegment)){
      $object->URLSegment = preg_replace('/-[0-9]+$/', null, $object->URLSegment).'-'.$count;
      $count++;
    }
  }
}