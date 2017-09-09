<?php
namespace EmojiCalculator\Operators;

/**
 * Class CalculateInterface
 * @package EmojiCalculator\Operators
 */
interface CalculateInterface
{
    /**
     * Calculate
     *
     * @param int $x
     * @param int $y
     *
     * @return int
     */
    public function calculate(int $x, int $y): int;
}