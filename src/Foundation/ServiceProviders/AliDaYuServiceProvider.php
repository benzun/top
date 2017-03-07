<?php

namespace ZunYue\Foundation\ServiceProviders;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use ZunYue\Alidayu\Alidayu;

class AliDaYuServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['alidayu'] = function ($pimple) {
            return new Alidayu($pimple['config']['alidayu']);
        };
    }
}