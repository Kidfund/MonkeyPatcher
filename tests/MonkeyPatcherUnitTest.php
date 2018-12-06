<?php

use classes\PrivateClass;
use Kidfund\MonkeyPatcher\MonkeyPatcher;

/**
 * @author    : timbroder
 * @copyright 2015 Kidfund Inc
 */


class MonkeyPatcherUnitTest extends PHPUnit_Framework_TestCase
{
    use MonkeyPatcher;

    protected $class;

    public function setUp()
    {
        parent::setUp();

        $this->class = new PrivateClass();
    }

    /**
     * @test
     */
    public function it_invokes_private_method()
    {
        $response = $this->invokeMethod($this->class, 'singleParam', ['one']);
        $this->assertEquals('one', $response);
    }

    /**
     * @test
     */
    public function it_invokes_private_method_with_multiple_params()
    {
        $response = $this->invokeMethod($this->class, 'doubleParam', ['one', 'two']);
        $this->assertEquals('two', $response);
    }

    /**
     * @test
     */
    public function it_gets_properties()
    {
        $this->assertNull($this->getProperty($this->class, 'property'));

        $this->class = new PrivateClass('hello');

        $this->assertEquals('hello', $this->getProperty($this->class, 'property'));
    }

    /**
     * @test
     */
    public function it_sets_properties()
    {
        $this->class = new PrivateClass('hello');

        $this->setProperty($this->class, 'property', 'bye');

        $this->assertEquals('bye', $this->getProperty($this->class, 'property'));
    }
}
