<?php

namespace Elemental;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use ThreeWhyData;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class ThreeWhyElement extends BaseElement
{
  private static $singular_name = 'Three Why';
  private static $plural_name = 'Threes';
  private static $description = 'Three why element';
  private static $inline_editable = false;
  private static $icon = 'font-icon-dot-3';

  private static $has_many = [
    'ThreeWhyDatas' => ThreeWhyData::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['ThreeWhyDatas']);

    $config = GridFieldConfig_RecordEditor::create();
    $config->addComponent(new GridFieldSortableRows('Sort'));

    $fields->addFieldToTab(
      'Root.Main', 
      GridField::create(
        'ThreeWhyDatas',
        'Three Why Data',
        $this->ThreeWhyDatas(),
        $config
      )
    );

    return $fields;
  }

  public function getType()
  {
    return 'Three Why';
  }
}