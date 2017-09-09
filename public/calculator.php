<?php
require __DIR__ . '/../vendor/autoload.php';

use EmojiCalculator\Calculator;

$x = (int) strip_tags($_POST['x']);
$y = (int) strip_tags($_POST['y']);
$emoji = strip_tags($_POST['emoji']);

$calculator = new Calculator();

// Only int and strings allowed.
echo $calculator->calculate($x, $y, $emoji);
