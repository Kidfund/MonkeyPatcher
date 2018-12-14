<?php
/**
 * @author    : timbroder
 * @copyright 2015 Kidfund Inc
 */

namespace classes;

class PrivateClass
{
    /**
     * @var null
     */
    private $property;

    /**
     * PrivateClass constructor.
     *
     * @param string|null $property
     */
    public function __construct(string $property = null)
    {
        $this->property = $property;
    }

    /**
     * @param string $one
     *
     * @return string
     */
    private function singleParam(string $one) : string
    {
        return $one;
    }

    /**
     * @param string $one
     * @param string $two
     *
     * @return string
     */
    private function doubleParam(string $one, string $two) : string
    {
        return $two;
    }
}
