<?php
namespace EmojiCalculator\Operators;

/**
 * Class Division
 * @package EmojiCalculator\Operators
 */
class Division extends Operator implements OperatorInterface, CalculateInterface
{
    /**
     * Division constructor.
     */
    public function __construct()
    {
        $this->emoji = 'U+1F631';
        $this->operator = "/";
        $this->name = 'Scream';
    }

    /**
     * @param int $x
     * @param int $y
     *
     * @return int
     */
    public function calculate(int $x, int $y): int
    {
        return (int)$x / $y;
    }
}