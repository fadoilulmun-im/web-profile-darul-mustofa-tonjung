<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\RequiredFields;
use Elemental\TestimoniElement;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class TestimoniData extends DataObject
{
  private static $default_sort = ['Sort' => 'ASC'];

  private static $db = [
    'Name' => 'Varchar',
    'Profession' => 'Varchar',
    'Response' => 'Text',
    'Sort' => 'Int',
  ];

  private static $has_one = [
    'Image' => AutoPublishImage::class,
    'TestimoniElement' => TestimoniElement::class,
  ];

  private static $summary_fields = [
    'Image.CMSThumbnail' => 'Image',
    'Name' => 'Name',
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['TestimoniElementID', 'Sort']);

    return $fields;
  }

  public function getCMSValidator() {
    return new RequiredFields([
      'Name',
      'Response',
      'ImageID'
    ]);
  }
}