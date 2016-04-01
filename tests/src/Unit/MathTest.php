<?php


/**
 * @file
 * Contains Drupal\Tests\phpunit_d8\Unit\MathTest
 */

namespace Drupal\Tests\phpunit_d8\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\phpunit_d8\Math;

/**
 * Class MathTest
 * @package Drupal\Tests\phpunit_d8\Unit
 *
 * @group math
 */
class MathTest extends UnitTestCase {
  public function addNumTest() {
    $math = new Math();
    $this->assertEquals($math->addNum(1,2,3), 6);
  }
}
