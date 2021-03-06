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

use RuntimeException;
use Girgit\Validator\StringTrait;
use Girgit\Validator\ValidatorFactory;

/**
 * The abstract class for Girgit\Validator\Validator.
 *
 * Method Prototypes:
 *
 * void     protected     function    __construct(array $dataSource);
 * void     protected     function    addRule($key, $rules)
 * void     protected     function    processRules();
 * void     protected     function    processRules();
 * boolean  private       function    _validate(string $field, string $strategy, string $param = null);
 */
class AbstractValidator
{
    use StringTrait;
    
    /**
     * Holds the input data for validation.
     *
     * @var array
     */
    protected $dataSource = [];

    /**
     * Holds the set of rules for validation.
     *
     * @var array
     */
    protected $rules = [];

    /**
     * Holds the set of validation errors
     *
     * @var array
     */
    protected $errors = [];

    /**
     * Class constructor
     *
     * @access  protected
     * @param   array $dataSource  Array to validate
     */
    protected function __construct(array $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    /**
     * This method has to be called by the extending class to add a rule for a filed.
     *
     * @param  string  $key    The field name or key in the data source to be validated
     * @param  string  $rules  The string of rules e.g. 'required|alpha|min:3|max:8'
     * @throws RuntimeException
     */
    protected function addRule($key, $rules)
    {
        if($this->isString($rules) && $this->notEmpty($rules)) {
            $this->rules[$key] =  $this->explodeString($rules, '|');
        } else {
            throw new RuntimeException(sprintf("Could not add the rules for key: %s", $key));
        }
    }

    /**
     * This method has to be called by the extending class to process the rules.
     */
    protected function processRules()
    {
        if(!empty($this->rules)) {
            //$this->prettyPrint($this->rules);
            foreach($this->rules as $field => $values)
            {
                foreach($values as $value) {
                    if(
                       !in_array('required', $values, true) && // if current field is not required &&
                       !$this->notEmpty($this->dataSource[$field]) // no data has been provided then
                    ) {
                        continue; // skip the loop
                    }
                    $continue = true;            

                    if(strpos($value, ':') !== false) {
                        list($strategy, $param) = $this->explodeString($value, ':');
                        $continue = $this->_validate($field, $strategy, $param);
                    } else {
                        $strategy = $value;
                        $continue = $this->_validate($field, $strategy);
                    }
                    
                    if(!$continue) { //break validating further the same field as soon as we break
                        break;
                    }
                }
            }
        }
    }

    /**
     * This acts as an internal method for this class. Its role is to call the
     * appropriate validation strategy class and return true on successful validation
     * else false.
     *
     * @access  private
     * @param   string   $field     The name of the field to validate
     * @param   string   $strategy  The strategy aka the rulename to be used
     * @param   mixed    $param     An extra parameter for the strategy (if required)
     * @return  boolean             Returns true if the field passes the rule else false
     */
    private function _validate($field, $strategy, $param = null)
    {
        $isValidFlag = true; // we are optimistic
        $factoryInstance = new ValidatorFactory($strategy);
        $strategyInstance = $factoryInstance->getStrategy();

        if($param) {
            $isValidFlag = $strategyInstance->validate($this->dataSource[$field], $param);
        } else {
            $isValidFlag = $strategyInstance->validate($this->dataSource[$field]);
        }
        
        if($isValidFlag === false) {
            $this->errors[$field] = $strategyInstance->getErrorMessage($field);    
        }
        
        return $isValidFlag;
        //$strategyInstance = call_user_func_array(['ValidatorFactory', 'create'], [$strategy]);
    }
    
}