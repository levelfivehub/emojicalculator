<?php
namespace EmojiCalculator\Operators;

/**
 * Class Subtraction
 * @package EmojiCalculator\Operators
 */
class Subtraction extends Operator implements OperatorInterface, CalculateInterface
{
    /**
     * Subtraction constructor.
     */
    public function __construct()
    {
        $this->emoji = 'U+1F480';
        $this->operator = '-';
        $this->name = 'Skull';
    }

    /**
     * @param int $x
     * @param int $y
     *
     * @return int
     */
    public function calculate(int $x, int $y): int
    {
        return (int)$x - $y;
    }
}