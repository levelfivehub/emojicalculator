<?php
require __DIR__ . '/../vendor/autoload.php';

use EmojiCalculator\Operators\Operators;

$operators = new Operators();
echo json_encode($operators->getAllEmojis());
