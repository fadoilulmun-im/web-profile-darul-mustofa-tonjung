<?php

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class SiteConfigExt extends DataExtension
{
  private static $db = [
    'Address' => 'Text',
    'Phone' => 'Varchar(255)',
    'Email' => 'Varchar(255)',
    'Slogan' => 'Varchar',
  ];

  private static $has_one = [
    'Logo' => AutoPublishImage::class,
    'BgBreadCrumb' => AutoPublishImage::class,
  ];

  public function updateCMSFields(FieldList $fields){
    $fields->removeByName(["Tagline", 'Access']);
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

    $fields->addFieldToTab(
      'Root.Main',
      TextField::create('Slogan', 'Slogan')
    );

    $fields->addFieldToTab(
      'Root.Main',
      UploadField::create('BgBreadCrumb', 'Background Breadcrumb')
        ->setFolderName('BgBreadCrumb')
        ->setDescription('This will be displayed on the every Bread Crumb')
    );

    $config = GridFieldConfig_RecordEditor::create();
    $config->addComponent(new GridFieldSortableRows('Sort'));

    $fields->addFieldsToTab('Root.SocialMedia', new GridField('SocialMediaData', 'SocialMediaData', SocialMediaData::get(), $config));

    return $fields;
  }
}
