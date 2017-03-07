<?php

namespace ZunYue\Alidayu;

class Alidayu
{
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function aa()
    {
        var_dump($this->config);
    }
}