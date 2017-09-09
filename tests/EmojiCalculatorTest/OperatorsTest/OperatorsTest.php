<?php
namespace EmojiCalculatorTest\OperatorsTest;

use EmojiCalculator\Operators\Operators;
use EmojiCalculator\ValueObject\Emoji;
use EmojiCalculator\Exception\EmojiNotFoundException;

class OperatorsTest extends \PHPUnit_Framework_TestCase
{
    public function testGetAllEmojis()
    {
        $operators = new Operators();
        $emojis = $operators->getAllEmojis();

        $this->assertCount(4, $emojis);
    }

    /**
     * @dataProvider emojiDataProvider
     *
     * @param string $unicode
     * @param array $expectedValues
     * @param bool|false $expectedException
     *
     * @throws EmojiNotFoundException
     */
    public function testOperators(
        $unicode,
        array $expectedValues,
        $expectedException = false
    ) {
        if ($expectedException === true) {
            $this->setExpectedException(EmojiNotFoundException::class);
        }

        $emoji = new Emoji($unicode);

        $operators = new Operators();
        $operator = $operators->getByEmoji($emoji);

        $this->assertEquals($expectedValues['operator'], $operator->getOperator());
        $this->assertEquals($expectedValues['emoji'], $operator->getName());
    }

    /**
     * 1. Unicode
     * 2. Expected values from Operator
     * 3. Exception thrown (bool)
     *
     * @return array
     */
    public function emojiDataProvider()
    {
        return [
            'addition' => [
                'U+1F47D',
                ['operator' => '+', 'emoji' => 'Alien',],
                false,
            ],
            'division' => [
                'U+1F631',
                ['operator' => '/', 'emoji' => 'Scream',],
                false,
            ],
            'multiplication' => [
                'U+1F47B',
                ['operator' => '*', 'emoji' => 'Ghost',],
                false,
            ],
            'subtraction' => [
                'U+1F480',
                ['operator' => '-', 'emoji' => 'Skull',],
                false,
            ],
            'not valid' => [
                'U+1F60F',
                ['operator' => '~', 'emoji' => 'Smirking',],
                true,
            ],
        ];
    }
}
