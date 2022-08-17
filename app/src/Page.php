<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [];

        public function getSocialMediaData(){
            return SocialMediaData::get();
        }
    }
}
