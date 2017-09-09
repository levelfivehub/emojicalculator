<?php
namespace EmojiCalculator\Exception;

/**
 * Class EmojiNotSelectedException
 * @package EmojiCalculator\Exception
 */
class EmojiNotSelectedException extends \Exception
{
    public function __construct()
    {
        $this->message = "No emoji selected";
    }
}