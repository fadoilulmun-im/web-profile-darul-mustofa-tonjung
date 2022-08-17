<?php

use SilverStripe\CMS\Model\SiteTree;


/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class HomePage extends Page
{
  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['Metadata']);
    return $fields;
  }
}