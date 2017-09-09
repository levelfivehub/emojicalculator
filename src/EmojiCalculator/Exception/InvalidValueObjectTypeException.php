<?php
namespace EmojiCalculator\Exception;

/**
 * Class InvalidValueObjectTypeException
 * @package EmojiCalculator\Exception
 */
class InvalidValueObjectTypeException extends \Exception
{
    /**
     * InvalidValueObjectType constructor.
     *
     * @param string $value
     * @param string $parameterType
     */
    public function __construct($value, $parameterType)
    {
        $this->message = "Parameter value of {$value} does not match type of {$parameterType}";
    }
}