<?php

namespace wbartz\acme\Models;

use Prophecy\Exception\InvalidArgumentException;

class Post
{
  private $title = "";

  public function setTitle($title)
  {
    if (empty($title)) {
      throw new InvalidArgumentException("Error Processing Request", 1);
    }
    $this->title = $title;
    return $this;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
