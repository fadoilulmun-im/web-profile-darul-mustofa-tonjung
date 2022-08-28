<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\RequiredFields;
use Elemental\ThreePrincipleElement;
use TractorCow\Colorpicker\Color;
use TractorCow\Colorpicker\Forms\ColorField;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\View\Requirements;

/**
 * Description
 * 
 * @package silverstripe
 * @subpackage mysite
 */
class ThreePrincipleData extends DataObject
{
  private static $default_sort = ['Sort' => 'ASC'];

  private static $db = [
    'Icon' => 'Varchar',
    'IconColor' => Color::class,
    'Title' => 'Varchar',
    'TitleColor' => Color::class,
    'Description' => 'Text',
    'DescriptionColor' => Color::class,
    'Sort' => 'Int',
  ];

  private static $has_one = [
    'ThreePrincipleElement' => ThreePrincipleElement::class,
  ];

  public function getCMSValidator() {
    return new RequiredFields([
      'Title', 
      'Icon',
      'Description',
    ]);
  }

  public function getCMSFields()
  {
    Requirements::css('_resources/themes/darmus/fonts/flaticon/font/flaticon.css?$v');

    $fields = parent::getCMSFields();
    $fields->removeByName([
      'ThreePrincipleElementID', 
      'Sort',
      'Icon'
    ]);

    $fields->addFieldToTab(
      "Root.Main", 
      DropdownField::create('Icon', 'Select Icon', Helper::flaticon())->setEmptyString("Select Icon"),
      'IconColor'
    );

    if($this->Icon){
      $fields->addFieldToTab(
        "Root.Main", 
        LiteralField::create('PreviewIcon', '
          <div id="Form_PreviewIconForm_Title_Holder" class="form-group field text">
              <label for="Form_PreviewIconForm_Title" id="title-Form_PreviewIconForm_Title" class="form__field-label">Preview Icon</label>
              <div class="form__field-holder">
                <span class="'.$this->Icon.' display-3 p-2 bg-light"></span>
              </div>
          </div>
        '),
        'Icon'
      );
    }

    return $fields;
  }

  // public function canCreate($member = null, $context = array())
  // {
  //   return false;
  // }

  // public function canDelete($member = null, $context = array())
  // {
  //   return false;
  // }

  public function canView($member = null, $context = array())
  {
    return true;
  }
}