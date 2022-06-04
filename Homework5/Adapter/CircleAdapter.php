<?php

class CircleAdapter implements ICircle
{
    private $circleAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    public function circleArea(int $circumference)
    {
        $diagonal = $circumference / 3.14;
        return $this->circleAreaLib->getCircleArea($diagonal);
    }
}
