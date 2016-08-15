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

use DateTime;
use Girgit\Validator\StringTrait;
use Girgit\Validator\IValidationStrategy;

/**
 * To Do: Documentation
 */
class Before implements IValidationStrategy
{
    use StringTrait;
    
    private $_errorType = 'date';
    private $_beforeDate;
    private $_dateFormat;
    
    public function validate($data, $string)
    {
        list($this->_dateFormat, $this->_beforeDate) = $this->explodeString($this->stringReplace('/', '', $string), ',');
    
        if(($data = DateTime::createFromFormat($this->_dateFormat, $data)) === false)
		{
            $this->_errorType = 'format';
			return false;
		}

		return ($data->getTimestamp() < DateTime::createFromFormat($this->_dateFormat, $this->_beforeDate)->getTimestamp());
    }
    
    public function getErrorMessage($field)
    {
        if($this->_errorType === 'format') {
            $message = sprintf("date must match format: %s", $this->_dateFormat);
        } else {
            $message = sprintf("date must be before %s", $this->_beforeDate);
        }
        return $message;
    }
}