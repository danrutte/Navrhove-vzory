<?php
class Strategy
{
    private $strategy;
    
public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }
