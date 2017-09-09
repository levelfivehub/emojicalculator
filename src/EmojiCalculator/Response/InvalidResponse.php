<?php
namespace EmojiCalculator\Response;

/**
 * Class InvalidResponse
 * @package EmojiCalculator\Response
 */
class InvalidResponse
{
    /**
     * @var string
     */
    private $error;

    /**
     * @var string
     */
    private $type;

    /**
     * InvalidResponse constructor.
     *
     * @param \Exception $exception
     */
    public function __construct(\Exception $exception)
    {
        $this->error = $exception->getMessage();
        $this->type = get_class($exception);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        header("HTTP/1.1 500 Internal Server Error");
        header('Content-Type: application/json');
        return json_encode(
            [
                'error' => $this->error,
                'type'  => $this->type,
            ]);
    }
}