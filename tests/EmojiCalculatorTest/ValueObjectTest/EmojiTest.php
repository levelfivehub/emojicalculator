<?php
namespace EmojiCalculatorTest\ValueObject;

use EmojiCalculator\Exception\EmojiNotSelectedException;
use EmojiCalculator\Exception\InvalidValueObjectTypeException;
use EmojiCalculator\ValueObject\Emoji;

class EmojiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider emojiDataProvider
     */
    public function testEmojiValueObject($emojiValue, $exception = null)
    {
        if (!is_null($exception)) {
            $this->setExpectedException($exception);
        }

        $emojiValueObject = new Emoji($emojiValue);

        if (is_null($exception)) {
            $this->assertEquals($emojiValue, $emojiValueObject->getValue());
        }
    }

    /**
     * 1. Emoji Value
     * 2. Expected exception (class name or null)
     *
     * @return array
     */
    public function emojiDataProvider()
    {
        return [
            'no value returns no emoji selection error' => [
                null,
                EmojiNotSelectedException::class,
            ],
            'no string provided, invalid value object type error' => [
                1,
                InvalidValueObjectTypeException::class,
            ],
            'invalid emoji type returns invalid value object type error' => [
                '123456',
                InvalidValueObjectTypeException::class,
            ],
            'valid emoji type' => [
                'U+1F47D',
                null,
            ],
        ];
    }
}
