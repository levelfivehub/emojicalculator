<?php
namespace EmojiCalculator\Operators;

use EmojiCalculator\ValueObject\Emoji;
use EmojiCalculator\Exception\EmojiNotFoundException;

/**
 * Class Operators
 * @package EmojiCalculator\Operators
 */
class Operators
{
    /**
     * @var array
     */
    private $operators = [
        Addition::class,
        Division::class,
        Subtraction::class,
        Multiplication::class,
    ];

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->operators;
    }

    /**
     * @param Emoji $emoji
     *
     * @return OperatorInterface
     * @throws EmojiNotFoundException
     */
    public function getByEmoji(Emoji $emoji)
    {
        foreach ($this->operators as $operator) {
            /** @var OperatorInterface $operatorObject */
            $operatorObject = new $operator;

            if ($operatorObject->getEmoji() == $emoji->getValue()) {
                return $operatorObject;
            }
        }

        throw new EmojiNotFoundException($emoji->getValue());
    }

    /**
     * @return array
     */
    public function getAllEmojis(): array
    {
        $emojis = [];

        foreach ($this->operators as $operator) {
            /** @var OperatorInterface $operatorObject */
            $operatorObject = new $operator;

            $emojis[] = [
                'emoji'  => $operatorObject->getEmoji(),
                'entity' => mb_convert_encoding(
                    preg_replace("/U\+([0-9A-F]*)/",
                        "&#x\\1;",
                        $operatorObject->getEmoji()
                    ),
                    "UTF-8",
                    "HTML-ENTITIES"
                ),
            ];
        }

        return $emojis;
    }
}