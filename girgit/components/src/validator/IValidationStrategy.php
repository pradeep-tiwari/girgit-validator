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
 * An interface to implemented by all our validation strategy classes.
 */
interface IValidationStrategy
{
    /**
     * The method to be called to perform validation on data.
     *
     * @access public
     * @param  string  $data   The actual data to validate.
     * @param  string  $param  The value to validate against.
     */
    public function validate($data, $param);
    
    /**
     * The method to be called to access the generated error message.
     *
     * @access public
     * @param   string  $field  The field for which the error message is required.
     * @return  string
     */
    public function getErrorMessage($field);
}