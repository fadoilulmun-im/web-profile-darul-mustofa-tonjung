<?php

class NewsImage extends AutoPublishImage
{
  private static $has_one = [
    'News' => NewsData::class,
  ];
}