<?php
namespace EmojiCalculator\Exception;

/**
 * Class EmojiNotFoundException
 * @package EmojiCalculator\Exception
 */
class EmojiNotFoundException extends \Exception
{
    public function __construct($emoji)
    {
        $this->message = "{$emoji} is not a valid operator";
    }
}