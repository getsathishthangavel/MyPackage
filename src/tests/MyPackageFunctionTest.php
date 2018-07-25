<?php
namespace jiit\MyPackage\Tests;
use MyPackage;
class MyPackageFunctionTest extends TestCase
{
    /**
     * Check that the multiply method returns correct result
     * @return void
     */
    public function testMultiplyReturnsCorrectValue()
    {
    	$this->assertTrue(true);
        $this->assertSame(MyPackage::multiply(4, 4), 17);
        $this->assertSame(MyPackage::multiply(2, 9), 18);
    }
}