<?php

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\PaginatedList;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class VideosPage extends Page
{
  public function requireDefaultRecords() {
    if (!DataObject::get_one('VideosPage')) {
        $page = new VideosPage();
        $page->Title = 'Videos';
        $page->URLSegment = 'videos';
        $page->Status = 'Published';
        $page->write();
        $page->publish('Stage', 'Live');
        $page->flushCache();
    }
    
    parent::requireDefaultRecords();
  }

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['ElementalArea']);
    return $fields;
  }
}