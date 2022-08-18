<?php

namespace Elemental;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
use TestimoniData;

class TestimoniElement extends BaseElement
{
  private static $singular_name = 'Testimoni';
  private static $plural_name = 'Testimonis';
  private static $description = 'Container box untuk testimonials';
  private static $icon = 'font-icon-happy';
  private static $inline_editable = false;

  private static $has_many = [
    'TestimoniDatas' => TestimoniData::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['TestimoniDatas']);

    $config = GridFieldConfig_RecordEditor::create();
    $config->addComponent(new GridFieldSortableRows('Sort'));

    $fields->addFieldToTab(
      'Root.Main', 
      GridField::create(
        'TestimoniDatas',
        'Testimoni Data',
        $this->TestimoniDatas(),
        $config
      )
    );

    return $fields;
  }

  public function getType()
  {
    return 'Testimonials';
  }
}