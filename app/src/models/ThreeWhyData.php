<?php

use SilverStripe\Dev\Debug;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\RequiredFields;
use Elemental\ThreeWhyElement;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class ThreeWhyData extends DataObject
{
  private static $default_sort = ['Sort' => 'ASC'];

  private static $db = [
    'Title' => 'Varchar',
    'Icon' => 'Varchar',
    'Description' => 'Text',
    'Sort' => 'Int',
  ];

  private static $has_one = [
    'ThreeWhyElement' => ThreeWhyElement::class,
  ];

  private static $summary_fields = [
    'Title' => 'Title',
    'Icon' => 'Icon',
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['ThreeWhyElementID', 'Sort']);

    return $fields;
  }

  public function getCMSValidator() {
    return new RequiredFields([
      'Title', 
      'Icon',
      'Description',
    ]);
  }

  // public function canCreate($member = null, $context = array())
  // {
  //   return false;
  // }

  // public function canDelete($member = null, $context = array())
  // {
  //   return false;
  // }

  public function canView($member = null, $context = array())
  {
    return true;
  }
}