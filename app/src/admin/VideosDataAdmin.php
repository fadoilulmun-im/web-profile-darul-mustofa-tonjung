<?php

use SilverStripe\Admin\ModelAdmin;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;


/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class VideosDataAdmin extends ModelAdmin
{
  /**
   * Managed data objects for CMS
   * @var array
   */
  private static $managed_models = [
    'VideosData'
  ];

  /**
   * URL Path for CMS
   * @var string
   */
  private static $url_segment = 'videos';

  /**
   * Menu title for Left and Main CMS
   * @var string
   */
  private static $menu_title = 'Videos';

  private static $menu_icon_class = 'font-icon-block-media';

  function getEditForm($id = null, $fields = null){
    $form = parent::getEditForm($id, $fields);
    if ($this->modelClass == "VideosData"){
      $form->Fields()
      ->fieldByName($this->sanitiseClassName($this->modelClass))
      ->getConfig()
      ->addComponent(new GridFieldSortableRows('Sort'));
    }

    return $form;
  }
}