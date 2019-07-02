<?php

class WelcomeTest extends PHPUnit_Framework_TestCase
{
  private $CI;

  public function setUp()
  {
    $this->CI = &get_instance();
  }

  public function testLoadController()
  {
    $folder = APPPATH . 'controllers';

    $this->assertTrue(class_exists('Welcome'), 'Welcome is loadable');

    $this->CI = new Welcome();
    $this->CI->index();

    unlink($folder . 'welcome.php');
  }
}
