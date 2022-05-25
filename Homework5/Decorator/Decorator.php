<?php

abstract class Decorator implements IMarkdown
{
    protected $content = null;

    public function __construct(IMarkdown $content)
    {
        $this->content = $content;
    }
}
