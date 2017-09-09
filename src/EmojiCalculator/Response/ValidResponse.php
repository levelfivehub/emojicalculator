<?php
namespace EmojiCalculator\Response;

/**
 * Class ValidResponse
 * @package EmojiCalculator\Response
 */
class ValidResponse
{
    /**
     * @var array
     */
    private $response;

    /**
     * ValidResponse constructor.
     *
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        header('Content-Type: application/json');
        return json_encode([ 'response' => $this->response, ]);
    }
}