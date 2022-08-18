<?php

namespace Elemental;

use DNADesign\Elemental\Models\BaseElement;
use TractorCow\Colorpicker\Color;
use TractorCow\Colorpicker\Forms\ColorField;

class AboutContentElement extends BaseElement
{
  private static $singular_name = 'About Content';
  private static $plural_name = 'About Contents';
  private static $description = 'Container box dengan konten, Title dikiri atau dikanan';
  private static $icon = 'font-icon-block-content';

  private static $db = [
    'TitlePosition' => 'Enum("Left,Right", "Left")',
    'TitleColor' => Color::class,
    'Content' => 'HTMLText',
    'LinkURL' => 'Varchar(255)',
    'LinkTitle' => 'Varchar(255)',
    'BgColor' => Color::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['BgColor', 'TitleColor']);
    $fields->addFieldToTab(
      'Root.Main', 
      ColorField::create('BgColor', 'BG color')->setInputType('color')
    );
    $fields->addFieldToTab(
      'Root.Main', 
      ColorField::create('TitleColor', 'Title Color')->setInputType('color'),
      'Content'
    );

    return $fields;
  }

  public function getType()
  {
    return 'About Content';
  }
}