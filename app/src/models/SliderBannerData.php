<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\RequiredFields;
use Elemental\SliderBannerElement;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class SliderBannerData extends DataObject
{
  private static $default_sort = ['Sort' => 'ASC'];

  private static $db = [
    'Title' => 'Varchar(255)',
    'Sort' => 'Int',
  ];

  private static $has_one = [
    'Image' => AutoPublishImage::class,
    'SliderBannerElement' => SliderBannerElement::class,
  ];

  private static $summary_fields = [
    'Image.CMSThumbnail' => 'Image',
    'Title' => 'Title',
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['SliderBannerElementID', 'Sort']);

    return $fields;
  }

  public function getCMSValidator() {
    return new RequiredFields([
      'Title', 
      'ImageID'
    ]);
  }
}