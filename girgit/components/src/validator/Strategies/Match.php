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
class Match implements IValidationStrategy
{
    
    use StringTrait;
    
    private $_matchTo;
    
    public function validate($data, $matchString)
    {
        list($this->_matchTo, $matchValue) = $this->explodeString($matchString, '=');
        return $data === $matchValue;
    }
    
    public function getErrorMessage($field)
    {
        return sprintf("%s mismatch", $this->_matchTo);
    }
}