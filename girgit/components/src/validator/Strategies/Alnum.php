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

namespace Girgit\Validator\Strategies;

use Girgit\Validator\IValidationStrategy;

/**
 * To Do: Documentation
 */
class Alnum implements IValidationStrategy
{   
    public function validate($data, $param = null)
    {
        return ctype_alnum($data);
    }
    
    public function getErrorMessage($field)
    {
        return sprintf("%s must contain only alphabets and numbers", $field);
    }
}