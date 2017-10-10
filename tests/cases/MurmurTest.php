<?php

use lastguest\Murmur;

class MurmurTest extends PHPUnit_Framework_TestCase {

    public function testHash3_int() {
      $this->assertEquals(236294829, Murmur::hash3_int("The quick brown fox jumps over the lazy dog", 1234567), "hash3_int");
    }

    public function testHash3() {
      $this->assertEquals('cnd0ue', Murmur::hash3("Hello World"), "hash3");
    }

}
