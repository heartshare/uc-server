<?php

namespace UcenterServer\App;

class App extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'add'    => 'onAdd',
            'ls'     => 'onLs',
            'ucinfo' => 'onUcInfo',
        ];
    }

    public function onAdd()
    {
        return null;
    }

    public function onLs()
    {
        return null;
    }

    public function onUcInfo()
    {
        return null;
    }
}
