<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Security;
use SilverStripe\Security\Member;


/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class VideosData extends DataObject
{
  private static $default_sort = ['Sort' => 'ASC'];

  private static $db = [
    'Title' => 'Varchar(150)',
    'YoutubeID' => 'Varchar(150)',
    'Sort' => 'Int',
  ];

  private static $has_one = [
    'Created_by' => Member::class,
    'Updated_by' => Member::class,
  ];

  private static $summary_fields = [
    'Title' => 'Title',
    'YoutubeID' => 'YoutubeID',
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName([
      "Created_byID",
      "Updated_byID",
      'Sort',
    ]);

    return $fields;
  }

  public function onBeforeWrite()
  {
    parent::onBeforeWrite();
    $member = Security::getCurrentUser();
    if(!$this->ID){
      $this->Created_by = $member->ID;
    }else{
      $this->Updated_by = $member->ID;
    }
  }

  public function canCreate($member = null, $context = array())
  {
    return true;
  }

  public function canDelete($member = null, $context = array())
  {
    $member = Security::getCurrentUser();
    if($member->inGroup('administrators')){
      return true;
    }

    if($member->ID == $this->Created_byID){
      return true;
    }

    return false;
  }

  public function canEdit($member = null, $context = array())
  {
    $member = Security::getCurrentUser();
    if($member->inGroup('administrators')){
      return true;
    }

    if($member->ID == $this->Created_byID){
      return true;
    }

    return false;
  }

  public function canView($member = null, $context = array())
  {
    return true;
  }
}