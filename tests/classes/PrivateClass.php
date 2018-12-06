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
     * @param null $property
     */
    public function __construct($property = null)
    {
        $this->property = $property;
    }

    /**
     * @param $one
     *
     * @return mixed
     */
    private function singleParam($one)
    {
        return $one;
    }

    /**
     * @param $one
     * @param $two
     *
     * @return array
     */
    private function doubleParam($one, $two)
    {
        return $two;
    }
}
