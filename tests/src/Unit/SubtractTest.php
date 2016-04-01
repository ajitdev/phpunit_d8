<?php
/**
 * Created by PhpStorm.
 * User: jeevanbhushetty
 * Date: 01/04/16
 * Time: 4:03 PM
 */
namespace Drupal\Tests\phpunit_d8\Unit;

use \Drupal\phpunit_d8\Math;
use \Drupal\Tests\UnitTestCase;

/**
 * Class MathTest
 * @package Drupal\Tests\phpunit_d8\Unit
 * @group math
 *
 */
class MathTest extends UnitTestCase {
  /**
   * @dataProvider addDataProvider
   */
public function testSubtract($a, $b, $c) {
  $math = new Math();
  $this->assertEquals($math->substract($a, $b), $c);
}

  public function addDataProvider() {
    return array(
      array(3,3,0),
      array(4,3,1),
    );
  }

}