<?php

/**
 * Created by PhpStorm.
 * User: ajit
 * Date: 4/1/16
 * Time: 3:47 PM
 */

namespace Drupal\phpunit_d8;

class Math {
  public function add($a, $b, $c) {
    return $a + $b + $c;
  }

  public function substract($a, $b) {
    return $a - $b;
  }

  public function divide($a, $b) {
    return $a / $b;
  }

}