<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\RequiredFields;
use Elemental\ThreePrincipleElement;
use TractorCow\Colorpicker\Color;
use TractorCow\Colorpicker\Forms\ColorField;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class ThreePrincipleData extends DataObject
{
  private static $default_sort = ['Sort' => 'ASC'];

  private static $db = [
    'Icon' => 'Varchar',
    'IconColor' => Color::class,
    'Title' => 'Varchar',
    'TitleColor' => Color::class,
    'Description' => 'Text',
    'DescriptionColor' => Color::class,
    'Sort' => 'Int',
  ];

  private static $has_one = [
    'ThreePrincipleElement' => ThreePrincipleElement::class,
  ];

  public function getCMSValidator() {
    return new RequiredFields([
      'Title', 
      'Icon',
      'Description',
    ]);
  }

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName([
      'ThreePrincipleElementID', 
      'Sort',
    ]);

    return $fields;
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