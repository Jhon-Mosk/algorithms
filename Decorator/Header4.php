<?php

class Header4 extends Decorator
{
    public function render(): string
    {
        return '<h4>' . str_replace('####', '', $this->content->render()) . '</h4>';
    }
}
