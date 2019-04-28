<?php

class BeautifyMessage
{
    /** @var string */
    private $message;

    /**
     * Constructor
     *
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * Return the message
     *
     * @return string
     */
    public function __toString(): string
    {
        return /** @lang HTML */"
            <b>Message: </b><i>{$this->message}</i>
        ";
    }
}
