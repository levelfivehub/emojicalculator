<?php
namespace EmojiCalculator\ValueObject;

use EmojiCalculator\Exception\EmojiNotSelectedException;
use EmojiCalculator\Exception\InvalidValueObjectTypeException;

/**
 * Class Emoji
 * @package EmojiCalculator\ValueObject
 */
class Emoji extends ValueObject
{
    /**
     * Emoji constructor.
     *
     * @param null $value
     */
    public function __construct($value = null)
    {
        if ( empty($value)) {
            throw new EmojiNotSelectedException();
        }

        if (! is_string($value)) {
            throw new InvalidValueObjectTypeException($value, 'emoji');
        }

        $convert = mb_convert_encoding(
            preg_replace("/U\+([0-9A-F]*)/",
                "&#x\\1;",
                $value
            ),
            "UTF-8",
            "HTML-ENTITIES"
        );

        if($convert === $value) {
            throw new InvalidValueObjectTypeException($value, 'emoji');
        }

        $this->setValue($value);
    }
}