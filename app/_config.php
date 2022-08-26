<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;

use SilverStripe\Admin\CMSMenu;
use SilverStripe\AssetAdmin\Controller\AssetAdmin;
use SilverStripe\CampaignAdmin\CampaignAdmin;
use SilverStripe\Reports\ReportAdmin;
use SilverStripe\VersionedAdmin\ArchiveAdmin;
use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;
use SilverStripe\Control\Director;

// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
// Settings are registered via Injector configuration - see passwords.yml in framework
Member::set_password_validator($validator);

// CMSMenu::remove_menu_item(ReportAdmin::class);
CMSMenu::remove_menu_class(ReportAdmin::class);
// CMSMenu::remove_menu_class(ArchiveAdmin::class);
CMSMenu::remove_menu_class(CampaignAdmin::class);
CMSMenu::remove_menu_class(AssetAdmin::class);

date_default_timezone_set('Asia/Jakarta');
TinyMCEConfig::get('cms')->enablePlugins('textcolor');
TinyMCEConfig::get('cms')->insertButtonsBefore('formatselect', 'forecolor');

if (!Director::isDev()) {
  Director::forceSSL();
}