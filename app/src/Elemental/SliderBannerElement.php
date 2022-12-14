<?php

namespace Elemental;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SliderBannerData;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class SliderBannerElement extends BaseElement
{
  private static $singular_name = 'Slider Banner';
  private static $plural_name = 'Sliders Banner';
  private static $description = 'Slider banner element';
  private static $inline_editable = false;
  private static $icon = 'font-icon-block-carousel';

  private static $has_many = [
    'SliderBannerData' => SliderBannerData::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['SliderBannerData']);

    $config = GridFieldConfig_RecordEditor::create();
    $config->addComponent(new GridFieldSortableRows('Sort'));

    $fields->addFieldToTab(
      'Root.Main', 
      GridField::create(
        'SliderBannerData',
        'Slider Banner Data',
        $this->SliderBannerData(),
        $config
      )
    );

    return $fields;
  }

  public function getType()
  {
    return 'Slider Banner';
  }
}