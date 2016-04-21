<?php

namespace UcenterServer\App;

class Feed extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'add' => 'onAdd',
            'get' => 'onGet',
        ];
    }

    public function onAdd()
    {
        return null;
    }

    public function onGet()
    {
        return null;
    }
}
