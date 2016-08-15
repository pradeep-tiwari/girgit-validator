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

use Girgit\Validator\StringTrait;
use Girgit\Validator\IValidationStrategy;

/**
 * To Do: Documentation
 */
class Between implements IValidationStrategy
{
    use StringTrait;
    
    private $_min;
    private $_max;
    
    public function validate($data, $range)
    {
        list($this->_min, $this->_max) = $this->explodeString($range, ',');
        
        return ($data >= (int) $this->_min && $data <= (int) $this->_max);
    }
    
    public function getErrorMessage($field)
    {
        return sprintf("%s must be between %s and %s", $field, $this->_min, $this->_max);
    }
}