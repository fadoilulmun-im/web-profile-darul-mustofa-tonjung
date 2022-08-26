<?php
namespace Elemental;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use ThreePrincipleData;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
use SilverStripe\Assets\Image;
use TractorCow\Colorpicker\Color;
use TractorCow\Colorpicker\Forms\ColorField;

class ThreePrincipleElement extends BaseElement
{
  private static $singular_name = 'Three Principle';
  private static $plural_name = 'Threes';
  private static $description = 'Three Principle element';
  private static $inline_editable = false;
  private static $icon = 'font-icon-dot-3';

  private static $db = [
    'BgColor' => Color::class,
  ];

  private static $has_many = [
    'ThreePrincipleDatas' => ThreePrincipleData::class,
  ];

  private static $has_one = [
    'BgImage' => Image::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['ThreePrincipleDatas']);

    $config = GridFieldConfig_RecordEditor::create();
    $config->addComponent(new GridFieldSortableRows('Sort'));

    $fields->addFieldToTab(
      'Root.Main', 
      GridField::create(
        'ThreePrincipleDatas',
        'Three Principle Data',
        $this->ThreePrincipleDatas(),
        $config
      )
    );

    return $fields;
  }

  public function getType()
  {
    return 'Three Principle';
  }

  public function onAfterWrite(){
    parent::onAfterWrite();
    if ($this->BgImage()->exists() && !$this->BgImage()->isPublished()) {
      $this->BgImage()->doPublish();
    }
  }
}