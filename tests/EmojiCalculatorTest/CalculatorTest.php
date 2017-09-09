<?php
namespace EmojiCalculatorTest;

use EmojiCalculator\Calculator;
use EmojiCalculator\Response\ValidResponse;
use EmojiCalculator\Response\InvalidResponse;

ob_start();

/**
 * Class CalculatorTest
 * @package EmojiCalculatorTest
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider calculationDataProvider
     * @runInSeparateProcess
     *
     * @param int $x
     * @param int $y
     * @param string $emoji
     * @param int $result
     * @param string|false $exceptionException
     */
    public function testCalculator($x, $y, $emoji, $result, $exceptionException = false)
    {
        $calculator = new Calculator();
        $response = $calculator->calculate($x, $y, $emoji);

        if ($exceptionException === true) {
            $this->assertEquals(InvalidResponse::class, get_class($response));
        } else {
            $this->assertEquals(ValidResponse::class, get_class($response));
            $answer = json_decode($response);
            $this->assertEquals($result, $answer->response->answer);
        }
    }

    /**
     * 1. x
     * 2. y
     * 3. emoji
     * 4. expected result
     * 5. exception thrown (boolean)
     *
     * @return array
     */
    public function calculationDataProvider()
    {
        return [
            'addition part one' => [
                1,
                1,
                'U+1F47D',
                2,
            ],
            'addition part two' => [
                5,
                3,
                'U+1F47D',
                8,
            ],
            'division part one' => [
                10,
                1,
                'U+1F631',
                10,
            ],
            'division part two' => [
                30,
                5,
                'U+1F631',
                6,
            ],
            'multiplication part one' => [
                1,
                1,
                'U+1F47B',
                1,
            ],
            'multiplication part two' => [
                5,
                5,
                'U+1F47B',
                25,
            ],
            'subtraction part one' => [
                10,
                5,
                'U+1F480',
                5,
            ],
            'subtraction part two' => [
                40,
                3,
                'U+1F480',
                37,
            ],
            'invalid emoji' => [
                1,
                1,
                'U+1F481',
                2,
                true,
            ],
        ];
    }
}
