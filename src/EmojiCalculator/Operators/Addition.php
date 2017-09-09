<?php
namespace EmojiCalculator\Operators;

/**
 * Class Addition
 * @package EmojiCalculator\Operators
 */
class Addition extends Operator implements OperatorInterface, CalculateInterface
{
    /**
     * Addition constructor.
     */
    public function __construct()
    {
        $this->emoji = 'U+1F47D';
        $this->operator = '+';
        $this->name = 'Alien';
    }

    /**
     * @param int $x
     * @param int $y
     *
     * @return int
     */
    public function calculate(int $x, int $y): int
    {
        return (int)$x + $y;
    }
}