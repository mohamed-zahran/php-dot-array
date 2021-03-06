<?php

namespace RaggiTech\DotArray\Test;

use PHPUnit\Framework\TestCase;
use RaggiTech\DotArray\DotArray;

class HelpersTest extends TestCase
{
    /** @var DotArray|null $dot Dot Array Object */
    protected $dot;

    /**
     * Load Dot Array
     *
     * @return void
     */
    protected function setUp()
    {
        parent::setUp();

        $this->dot = new DotArray([
            [
                'first_name'    => 'Moamen',
                'last_name'     => 'Eltouny',
            ],
            [
                'first_name'    => 'Menna',
                'last_name'     => 'Elhendy',
            ]
        ]);
    }

    /**
     * Check Dot
     */
    public function testDotFunction()
    {
        $this->assertInstanceOf(DotArray::class, dot());
    }

    /**
     * Check is_numeric_array
     */
    public function testIsNumericArrayFunction()
    {
        $this->assertTrue(is_numeric_array($this->dot->all()));
    }

    /**
     * Check is_null_array
     */
    public function testIsNullArrayFunction()
    {
        $this->dot->clear();
        $this->assertTrue(is_null_array($this->dot->all()));
    }

    /**
     * Check is_null_array
     */
    public function testIsMultiDimensionalArrayFunction()
    {
        $this->assertTrue(is_multidimensional_array($this->dot->all()));
    }
}
