<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Security;
use SilverStripe\Security\Member;
use SilverStripe\Control\Director;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class SocialMediaData extends DataObject
{
  private static $default_sort = ['Sort' => 'ASC'];

  private static $db = [
    'Title' => 'Varchar(150)',
    'Icon' => 'Varchar(150)',
    'Link' => 'Varchar(150)',
    'Sort' => 'Int',
  ];

  private static $has_one = [
    'Created_by' => Member::class,
    'Updated_by' => Member::class,
  ];

  private static $summary_fields = [
    'Title' => 'Title',
    'Link' => 'Lnik',
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName([
      "Created_byID",
      "Updated_byID",
      'Sort',
    ]);

    $field = $fields->dataFieldByName('Icon');
    $field->setDescription('Silahkan lihat list icon tersedia di link berikut <a href="'.Director::absoluteBaseURL().'home/icomoon" target="_blank">'.Director::absoluteBaseURL().'home/icomoon</a>');

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
}