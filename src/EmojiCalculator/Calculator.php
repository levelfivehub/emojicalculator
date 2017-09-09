<?php
namespace EmojiCalculator;

use EmojiCalculator\Operators\CalculateInterface;
use EmojiCalculator\Operators\OperatorInterface;
use EmojiCalculator\Operators\Operators;
use EmojiCalculator\ValueObject\Emoji;
use EmojiCalculator\Response\ValidResponse;
use EmojiCalculator\Response\InvalidResponse;
use EmojiCalculator\ValueObject\Integer;

/**
 * Class Calculator
 * @package EmojiCalculator
 */
class Calculator
{
    /**
     * @param int $x
     * @param int $y
     * @param string $emoji
     *
     * @return InvalidResponse|ValidResponse
     */
    public function calculate(int $x, int $y, string $emoji)
    {
        try {
            $emoji = new Emoji($emoji);

            $operator = new Operators();

            /** @var OperatorInterface|CalculateInterface $operation */
            $operation = $operator->getByEmoji($emoji);

            $response = [];
            $response["answer"] = $operation->calculate($x, $y);

            $response['x'] = $x;
            $response['y'] = $y;
            $response['operator'] = $operation->getOperator();

            return new ValidResponse($response);
        } catch (\Exception $e) {
            return new InvalidResponse($e);
        }
    }
}