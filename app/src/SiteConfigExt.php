<?php

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class SiteConfigExt extends DataExtension
{
  private static $db = [
    'Address' => 'Text',
    'Phone' => 'Varchar(255)',
    'Email' => 'Varchar(255)',
  ];

  private static $has_one = [
    'Logo' => AutoPublishImage::class,
  ];

  public function updateCMSFields(FieldList $fields){
    $fields->removeByName(["Tagline"]);
    $fields->addFieldToTab(
      'Root.Main',
      UploadField::create('Logo', 'Logo')
        ->setFolderName('logo')
        ->setDescription('This will be displayed on the header')
    );

    $fields->addFieldToTab(
      'Root.Main',
      TextareaField::create('Address', 'Address')->setRows(5)
    );

    $fields->addFieldToTab(
      'Root.Main',
      TextField::create('Phone', 'Phone')
    );

    $fields->addFieldToTab(
      'Root.Main',
      TextField::create('Email', 'Email')
    );

    return $fields;
  }
}
