<?php

namespace Commentar\Presentation;

class ThemeLoader
{
    private $timestamp;

    public function __construct($timestamp)
    {
        $this->timestamp = new \DateTime($timestamp);
    }

    public function getFile($filename)
    {
        return $filename;
    }
}
