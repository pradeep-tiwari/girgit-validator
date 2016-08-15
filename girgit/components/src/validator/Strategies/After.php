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

// Note: we need to refactory our date validation strategy as because we can smell some bad code here

namespace Girgit\Validator\Strategies;

use DateTime;
use Girgit\Validator\StringTrait;
use Girgit\Validator\IValidationStrategy;

/**
 * To Do: Documentation
 */
class After implements IValidationStrategy
{
    use StringTrait;
    
    private $_errorType = 'date';
    private $_afterDate;
    private $_dateFormat;
    
    public function validate($data, $string)
    {
        list($this->_dateFormat, $this->_afterDate) = $this->explodeString($this->stringReplace('/', '', $string), ',');
    
        if(($data = DateTime::createFromFormat($this->_dateFormat, $data)) === false)
		{
            $this->_errorType = 'format';
			return false;
		}

		return ($data->getTimestamp() > DateTime::createFromFormat($this->_dateFormat, $this->_afterDate)->getTimestamp());
    }
    
    public function getErrorMessage($field)
    {
        if($this->_errorType === 'format') {
            $message = sprintf("date must match format: %s", $this->_dateFormat);
        } else {
            $message = sprintf("date must be after %s", $this->_afterDate);
        }
        return $message;
    }
}