<?php

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\TextareaField;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class ContactPage extends Page
{
  private static $db = [
    'Maps' => 'HTMLText',
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['Metadata', 'ElementalArea']);

    $fields->addFieldToTab(
      'Root.Main',
      TextareaField::create('Maps', 'Maps')
    );

    return $fields;
  }
}