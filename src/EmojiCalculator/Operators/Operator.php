<?php
namespace EmojiCalculator\Operators;

/**
 * Class Operator
 * @package EmojiCalculator\Operators
 */
abstract class Operator
{
    /**
     * @var string
     */
    protected $emoji;

    /**
     * @var string
     */
    protected $operator;

    /**
     * I know this does not get used anywhere, but on all systems
     * it is good to have a reference, or a human-readable entity
     * identifier.
     *
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}