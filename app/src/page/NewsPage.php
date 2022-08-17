<?php

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\PaginatedList;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class NewsPage extends Page
{
  public function requireDefaultRecords() {
    if (!DataObject::get_one('NewsPage')) {
        $page = new NewsPage();
        $page->Title = 'Blog';
        $page->URLSegment = 'blog';
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
    $fields->removeByName(['Metadata', 'ElementalArea']);
    return $fields;
  }
}

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class NewsPageController extends PageController
{
  public function doInit()
  {
    parent::doInit();
  }

  private static $allowed_actions = [
    's',
  ];

  public function index()
  {
    $news = NewsData::get();
    $news = new PaginatedList($news, $this->getRequest());
    $news->setPageLength(12);

    return ['News' => $news];
  }

  public function s()
  {
    $newsOne = NewsData::get()->filter([
      'URLSegment' => $this->request->param("ID"),
    ])->first();

    return ['NewsOne' => $newsOne];
  }
}