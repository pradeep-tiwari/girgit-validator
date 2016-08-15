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
class Url implements IValidationStrategy
{   
    private $_validUrlPrefixes = array('http://', 'https://', 'ftp://');
    
    public function validate($data, $param = null)
    {
        foreach ($this->_validUrlPrefixes as $prefix) {
            if (strpos($data, $prefix) !== false) {
                return filter_var($data, FILTER_VALIDATE_URL);
            }
        }

        return false;
    }
    
    public function getErrorMessage($field)
    {
        return sprintf("%s appears to be invalid", $field);
    }
}