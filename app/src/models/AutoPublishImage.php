<?php

use SilverStripe\Assets\Image;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class AutoPublishImage extends Image
{
  public function onAfterWrite()
  {
    parent::onAfterWrite();
    $this->publishRecursive();
  }
}