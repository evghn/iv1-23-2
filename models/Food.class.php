<?php

class Food
{
    public string $title = '';

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
