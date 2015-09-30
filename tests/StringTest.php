<?php

require_once "functions.php";
 
class StringTest extends PHPUnit_Framework_TestCase
{
    public function testMakeGreat() {
        $this->assertEquals("This example is great.", makeGreat("This example is bad."));
        $this->assertEquals("This example is great.", makeGreat("This example is BAD."));
        $this->assertEquals("This example is great.", makeGreat("This example is Bad."));
        $this->assertEquals("This example is B A D.", makeGreat("This example is B A D."));
        $this->assertEquals("This presenter is great. Really great.", makeGreat("This presenter is Bad. Really bad."));
    }
}