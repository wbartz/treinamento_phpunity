<?php

use PHPUnit\Framework\TestCase;
use wbartz\acme\Models\Post;

class PostTest extends TestCase
{
  public function test_if_title_can_be_assing()
  {
    $post = new Post();
    $post->setTitle("The Theory of everithyng");

    $this->assertEquals("The Theory of everithyng", $post->getTitle());
  }
}
