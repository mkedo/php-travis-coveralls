<?php
namespace MyApp;

class GreeterTest extends \PHPUnit_Framework_TestCase
{
    public function testFormat()
    {
        $greeter = new Greeter();
        $this->assertSame("Hello, World!", $greeter->format("World"));
        $this->assertSame("Hello, stranger!", $greeter->format());
    }
}
