<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Security\Security;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class NewsData extends DataObject
{
  private static $db = [
    'Title' => 'Varchar',
    'Content' => 'HTMLText',
    'URLSegment' => 'Varchar(150)',
  ];

  private static $has_many = [
    'Images' => NewsImage::class,
  ];

  private static $has_one = [
    'Created_by' => Member::class,
    'Updated_by' => Member::class,
  ];

  private static $summary_fields = [
    'firstImage.CMSThumbnail' => 'Image',
    'Title' => 'Title',
    'URLSegment' => 'URL',
    'Created_by.FirstName' => 'Created By',
    'Updated_by.FirstName' => 'Updated By',
  ];

  public function firstImage()
  {
    return $this->Images()->first();
  }

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName([
      "Created_byID",
      "Updated_byID",
      'URLSegment',
    ]);

    $fields->addFieldToTab(
      'Root.Images',
      $uploadField = UploadField::create('Images', 'Images')->setFolderName('Uploads/News')
    );

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

    if($this->isChanged('Title')){
      $this->URLSegment = SiteTree::create()->generateURLSegment($this->Title);
      $checkExisting = self::get()->filter([
        'ID:not' => $this->ID,
      ])->filterAny([
        'Title:nocase' => $this->Title,
        'URLSegment' => $this->URLSegment,
      ]);
      if($count = count($checkExisting)){
        $this->URLSegment = $this->URLSegment.'-'.($count+1);
      }
    }
  }


  public function onBeforeDelete()
  {
    foreach($this->Images() as $image){
      $image->delete();
    }
    parent::onBeforeDelete();
  }
}