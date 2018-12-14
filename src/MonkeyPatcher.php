<?php
/**
 * @author: timbroder
 * Date: 4/28/17
 * @copyright 2018 Kidfund Inc
 */

namespace Kidfund\MonkeyPatcher;

use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

/**
 * Trait MonkeyPatcher
 * @package Kidfund\MonkeyPatcher
 */
trait MonkeyPatcher
{
    /**
     * Call protected/private method of a class.
     * You should only use this for testing!
     *
     * Note: If the function has arguments that need to be references,
     * then they must be references in the passed argument list.
     *
     * @param object &$object    Instantiated object that we will run method on.
     * @param string $methodName Method name to call
     * @param array $parameters  Array of parameters to pass into method.
     *
     * @return mixed Method return.
     * @throws \ReflectionException
     */
    public function invokeMethod(&$object, string $methodName, array $parameters = [])
    {
        $reflection = new ReflectionClass(get_class($object));

        /** @var ReflectionMethod $method */
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    /**
     * Set protected/private property of a class
     *
     * @param $object
     * @param string $propertyName
     * @param $value
     *
     * @throws \ReflectionException
     */
    public function setProperty(&$object, string $propertyName, $value)
    {
        $reflection = new ReflectionClass(get_class($object));

        /** @var ReflectionProperty $property */
        $property = $reflection->getProperty($propertyName);
        $property->setAccessible(true);

        $property->setValue($object, $value);
    }

    /**
     * Get protected/private property of a class
     *
     * @param $object
     * @param string $propertyName
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function getProperty(&$object, string $propertyName)
    {
        $reflection = new ReflectionClass(get_class($object));

        /** @var ReflectionProperty $property */
        $property = $reflection->getProperty($propertyName);
        $property->setAccessible(true);

        return $property->getValue($object);
    }
}
