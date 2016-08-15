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
class Max implements IValidationStrategy
{
    private $_length;
    
    public function validate($data, $num)
    {
        $this->_length = $num;
        
        return strlen($data) <= $num;  
    }
    
    public function getErrorMessage($field)
    {
        return sprintf("%s must be <= %s", $field, $this->_length);
    }
}