<?php
namespace EmojiCalculator\Operators;

/**
 * Interface OperatorInterface
 * @package EmojiCalculator\Operators
 */
interface OperatorInterface
{
    /**
     * Return operator
     *
     * @return string
     */
    public function getOperator(): string;

    /**
     * Get emoji
     *
     * @return string
     */
    public function getEmoji(): string;

    /**
     * Get name or identifier
     *
     * @return string
     */
    public function getName(): string;
}
