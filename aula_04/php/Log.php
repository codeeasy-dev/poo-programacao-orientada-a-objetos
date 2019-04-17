<?php

class Log
{
    /** @var string $file */
    private $file;

    /**
     * Constructor
     *
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * Write in log file
     *
     * @param string $payload
     * @return void
     */
    public function writeLine(string $payload): void
    {
        file_put_contents($this->file, $payload . "\n", FILE_APPEND);
    }

    /**
     * Get log data
     *
     * @return string
     */
    public function getLog(): string
    {
        return file_get_contents($this->file);
    }
}
