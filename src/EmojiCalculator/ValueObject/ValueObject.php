<?php
namespace EmojiCalculator\ValueObject;

/**
 * Can be used for other ValueObjects.
 * I know this only gets used once, but want
 * to give an example on how I would deal with other
 * Value Objects.
 *
 * Class ValueObject
 * @package EmojiCalculator\ValueObject
 */
abstract class ValueObject
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * Value set after being defined in parent class
     *
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}