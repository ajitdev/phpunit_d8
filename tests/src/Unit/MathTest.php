<?php


/**
 * @file
 * Contains Drupal\Tests\phpunit_d8\Unit\MathTest
 */

use Drupal\Tests\UnitTestCase;
use Drupal\phpunit_d8\Math;

/**
 * Class MathTest
 * @group math
 */
class MathTest extends UnitTestCase {


  /**
   * Very simple test to MathTest::addNum().
   * @dataProvider addDataProvider
   */
  public function addNum($a, $b, $c, $d) {
    $math = new Math();
    $this->assertEquals($math->addNum($a,$b,$c), $d);
  }


  public function addDataProvider() {
  return array(
    array(5,5,5,15),
    array(0,0,0,0),
    array(0,1,0,1),
  );
  }

  /**
   * @dataProvider subtractDataProvider
   */
  public function testSubtract($a, $b, $c) {
    $math = new Math();
    $this->assertEquals($math->substract($a, $b), $c);
  }

  public function subtractDataProvider() {
    return array(
      array(3,3,0),
      array(4,3,1),
    );
  }

  /**
   * @dataProvider divideDataProvider
   */
  public function testDivide($a, $b, $c) {
    $math = new Math();
    $this->assertEquals($math->divide($a, $b), $c);
  }

  public function divideDataProvider() {
    return array(
      array(3,3,1),
      array(10,2,5),
    );
  }

  /**
   * @expectedException PHPUnit_Framework_Error
   */
  public function testException() {
    include ('non_existing_file.php');
  }


}
