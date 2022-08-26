<?php
namespace Elemental;

use DNADesign\Elemental\Models\BaseElement;
use TractorCow\Colorpicker\Color;
use TractorCow\Colorpicker\Forms\ColorField;
use SilverStripe\Assets\Image;

class AboutImageElement extends BaseElement
{
  private static $singular_name = 'About Image Content';
  private static $plural_name = 'About Image Contents';
  private static $description = 'Container box dengan konten satu image dikiri atau dikanan';

  private static $db = [
    'TitleColor' => Color::class,
    'Content' => 'HTMLText',
    'BgColor' => Color::class,
    'ImagePosition' => 'Enum("Left,Right", "Left")',
  ];

  private static $has_one = [
    'Image' => Image::class,
    'BgImage' => Image::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->removeByName(['TitleColor', 'BgColor']);
    $fields->addFieldToTab(
      'Root.Main', 
      ColorField::create('TitleColor', 'TitleColor')->setInputType('color'),
      'Content'
    );
    $fields->addFieldToTab(
      'Root.Main', 
      ColorField::create('BgColor', 'BG color')->setInputType('color'),
      'BgImage'
    );
    return $fields;
  }

  public function getType()
  {
    return 'About Side Image';
  }

  public function onAfterWrite(){
    parent::onAfterWrite();
    if ($this->Image()->exists() && !$this->Image()->isPublished()) {
      $this->Image()->doPublish();
    }
    if ($this->BgImage()->exists() && !$this->BgImage()->isPublished()) {
      $this->BgImage()->doPublish();
    }
  }
}