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

use Reflection;
use ReflectionClass;
use RuntimeException;
use ReflectionException;

/**
 * A factory for generating straetgy classes within Girgit\Validator\Strategies
 * folder.
 *
 * Method Prototypes:
 *
 * void    public   function   __construct(string $strategy);
 * object  public   function   getStrategy(void);
 */
class ValidatorFactory
{
    /**
     * Holds an instance of strategy class.
     *
     * @var object
     */
    private $_strategyInstance = null;

    /**
     * Class constructor.
     *
     * @access  public
     * @param   string  $strategy  The name of strategy to be produced.
     * @throws  RuntimeException
     * @todo    Cache reflected objects for future references
     */
    public function __construct($strategy)
    {
        try {
            $reflectStrategy = new ReflectionClass("Girgit\Validator\Strategies\\$strategy");
        } catch(ReflectionException $e) {
            throw new RuntimeException(sprintf("No class exists for rule: %s", $strategy));
        }

        if(!$reflectStrategy->implementsInterface('Girgit\Validator\IValidationStrategy')) {
            throw new RuntimeException(sprintf("The class defined for rule: %s must implement interface: IValidationStrategy", $strategy));
        }

        // things are fine, let us produce our strategy instance
        $this->_strategyInstance = $reflectStrategy->newInstance();
    }

    /**
     * This method is called to get the instance.
     *
     * @access  public
     * @return  object  The strategy object.
     */
    public function getStrategy()
    {
        return $this->_strategyInstance;
    }
}
