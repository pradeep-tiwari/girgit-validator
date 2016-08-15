<?php

/**
 * @package Girgit
 * @license MIT
 * @author Pradeep T. <pt21388@gmail.com>
 * @copyright Copyright (c) 2016, Pradeep T.
 *
 * This file is part of the Girgit package. For the full copyright and license
 * information, please view the LICENSE file that was distributed with this source
 * code.
 */

namespace Girgit\Validator;

/**
 * Set of common string manipulation methods. The reason to use this as a triat are:
 *
 * 1. We do not want to provide static methods wrapped into as utility class.
 * 2. We want to abstract the algorithm used to manipulate the string.
 */
trait StringTrait
{
    /**
     * Checks if the provided string is empty.
     *
     * @access protected
     * @param  string  $string  The string to check.
     * @return boolean
     */
    protected function notEmpty($string)
    {
        return trim($string) !== '';
    }
    
    /**
     * Checks if the datatype is string.
     *
     * @access protected
     * @param  string  $string  The string to check.
     * @return boolean
     */
    protected function isString($string)
    {
        return is_string($string);
    }
    
    /**
     * Returns an array from a csv.
     *
     * @access protected
     * @param  string  $string     The csv string.
     * @param  string  $delimiter  The delimiter used.
     * @return boolean
     */
    protected function explodeString($string, $delimeter)
    {
        return str_getcsv($string, $delimeter);
    }

    /**
     * Returns a replaced string.
     *
     * @access protected
     * @param  string   $what  The string to replace.
     * @param  string  $with   The string as substitute.
     * @param  string  $string The actual subject string.
     * @return string
     */
    protected function stringReplace($what, $with, $string)
    {
        return str_replace($what, $with, $string);
    }
    
    /**
     * A pretty printer for an array.
     *
     * @access protected
     * @param  array  $arr  The array to pretty print.
     */
    protected function prettyPrint(array $arr)
    {
        echo '<pre>', print_r($arr, 1), '</pre>';
    }
    
    /**
     * A pretty dumper for an array.
     *
     * @access protected
     * @param  array  $arr  The array to pretty dump.
     */
    protected function prettyDump(array $arr)
    {
        echo '<pre>', var_dump($arr), '</pre>';
    }
}