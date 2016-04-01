<?php

/**
 * @file
 * Contains Drupal\phpunit_d8\Math
 */

namespace Drupal\phpunit_d8;

/**
 * Class Math
 * @package Drupal\phpunit_d8
 *
 * @ingroup math
 */
class Math {
  public function addNum($a, $b, $c) {
    return $a + $b + $c;
  }

  public function substract($a, $b) {
    return $a - $b;
  }

  public function divide($a, $b) {
    return $a / $b;
  }

}