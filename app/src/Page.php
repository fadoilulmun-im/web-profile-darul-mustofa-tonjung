<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\ORM\DB;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [];

        public function getSocialMediaData(){
            return SocialMediaData::get();
        }

        public function getNews($limit = 4)
        {
            return NewsData::get()->limit($limit);
        }

        public function v()
        {
            return time();
        }

        public function countNews()
        {
            $count = DB::query("SELECT COUNT(*) FROM NewsData")->value();
            return $count;
        }
    }
}
