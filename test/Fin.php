<?php
require_once __DIR__ . '/../src/Final.php';

class Fin extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $final = new Final (10);
        $result = $final->modulus(2);

        $this->assertEquals(0, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $final = new Final (2);
        $result = $final->modulus(15);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $final = new Final (2);
        $result = $final->modulus('Z');
    }

    public function testModulus1()
    {
        $final = new Final (15);
        $result = $final->modulus(10);

        $this->assertEquals(5, $result);
    }

    public function testModulus2()
    {
        $final = new Final (32);
        $result = $final->modulus(12);

        $this->assertEquals(8, $result);
    }

}