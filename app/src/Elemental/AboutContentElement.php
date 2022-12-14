<?php

namespace Elemental;

use DNADesign\Elemental\Models\BaseElement;
use TractorCow\Colorpicker\Color;
use TractorCow\Colorpicker\Forms\ColorField;
use SilverStripe\Assets\Image;

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

  private static $has_one = [
    'BgImage' => Image::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['BgColor', 'TitleColor']);
    $fields->addFieldToTab(
      'Root.Main', 
      ColorField::create('BgColor', 'BG Color')->setInputType('color')
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

  public function onAfterWrite(){
    parent::onAfterWrite();
    if ($this->BgImage()->exists() && !$this->BgImage()->isPublished()) {
      $this->BgImage()->doPublish();
    }
  }
}