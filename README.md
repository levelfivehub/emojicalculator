# Emoji Calculator

Open index.php file in browser.
The index.php is located in the /public directory.

PHP 7.1 supported.

### Rules

1. No characters are allowed apart from whole numbers
2. Emoji's can be changed in the Operators namespace
3. New Emojis can be added in the Operators namespace

### Summary of the approach I took

- The emojis are populated via an API call (emojis.php)
- Each emoji is really an operator.  I have an Emoji ValueObject to validate the input (immutable).
- We have 2 types of responses; valid response (200) and an invalid response (500).  This allows jQuery to see if it is a valid response or not.
- All responses send a JSON to the frontend.


### To run test:

```
./vendor/bin/phpunit -c phpunit.xml tests/


...................                                               19 / 19 (100%)

Time: 551 ms, Memory: 4.00MB

OK (19 tests, 31 assertions)

```
