<?php
/**
 * Mathematician
 *
 * @author      Trevor Suarez (Rican7)
 * @copyright   2014 Trevor Suarez
 * @license     MIT
 * @version     0.1.0
 */

namespace Mathematician\Integer\Adapter;

/**
 * AdapterInterface
 *
 * @package Mathematician\Integer\Adapter
 */
interface AdapterInterface
{

    /**
     * Create an instance of a number adapter
     *
     * @param mixed $number The actual numeric value
     * @param int $radix    The "base" of the number system represented by $number
     * @static
     * @access public
     * @return self
     */
    public static function factory($number, $radix = 0);

    /**
     * Get the raw value
     *
     * @access public
     * @return mixed
     */
    public function getRawValue();

    /**
     * Get a string representation of the number
     *
     * @access public
     * @return string
     */
    public function toString();

    /**
     * Add numbers
     *
     * @param mixed $number
     * @access public
     * @return self
     */
    public function add($number);

    /**
     * Subtract numbers
     *
     * @param mixed $number
     * @access public
     * @return self
     */
    public function sub($number);

    /**
     * Multiply numbers
     *
     * @param mixed $number
     * @access public
     * @return self
     */
    public function mul($number);

    /**
     * Divide numbers
     *
     * @param mixed $number
     * @access public
     * @return self
     */
    public function div($number);


    /**
     * Magic Methods
     */

    /**
     * Get a string representation of the number
     *
     * @access public
     * @return string
     */
    public function __toString();
}
