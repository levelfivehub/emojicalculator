<?php
namespace EmojiCalculator\Operators;

/**
 * Class Multiplication
 * @package EmojiCalculator\Operators
 */
class Multiplication extends Operator implements OperatorInterface, CalculateInterface
{
    /**
     * Multiplication constructor.
     */
    public function __construct()
    {
        $this->emoji = 'U+1F47B';
        $this->operator = '*';
        $this->name = 'Ghost';
    }

    /**
     * @param int $x
     * @param int $y
     *
     * @return int
     */
    public function calculate(int $x, int $y): int
    {
        return (int)$x * $y;
    }
}