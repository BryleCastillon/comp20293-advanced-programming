<?php
require_once __DIR__ . '/../src/Final2.php';

class Fins extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $fins2 = new Fins2();
        $fins2->setName('Bryle');
        $this->assertEquals($fins2->getName(), 'Bryle');
    }

    public function testGetAge()
    {
        $fins2 = new Fins2();
        $fins2->setAge(22);
        $this->assertEquals($fins2->getAge(), 22);
    }

    public function testFaveColor()
    {
        $fins2 = new Fins2();
        $fins2->setFaveColor('Black');
        $this->assertEquals($fins2->getFaveColor(), 'Black');
    }

    public function testGetNameCheckString()
    {
        $fins2 = new Fins2();
        $fins2 ->setName('Bryle');
        $this->assertIsString($fins2->getName(), 'Bryle');
    }

    public function testGetAgeCheckInt()
    {
        $fins2 = new Fins2();
        $fins2->setAge(22);
        $this->assertIsInt($fins2->getAge(), 22);
    }

    public function testGetAgeCheckNumeric()
    {
        $fins2 = new Fins2();
        $fins2->setAge(22);
        $this->assertIsNumeric($fins2->getAge(), 22);
    }
    
    public function testFaveColorCheckString()
    {
        $fins2 = new fins2();
        $fins2->setFaveColor('Black');
        $this->assertIsString($fins2->getFaveColor(), 'Black');
    }

    public function testGetTogetherInput()
    {
        $fins2 = new fins2();
        $fins2->setTogetherInput('Bryle', 21, 'Black');
        $this->assertEquals($fins2->getTogetherInput(), 'Bryle', 21, 'Black');
    }

}