<?php

namespace UcenterServer\App;

class App extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'ls'     => 'onLs',
            'add'    => 'onAdd',
            'ucinfo' => 'onUcInfo',
        ];
    }

    public function onLs()
    {
        return null;
    }

    public function onAdd()
    {
        return null;
    }

    public function onUcInfo()
    {
        return null;
    }
}
