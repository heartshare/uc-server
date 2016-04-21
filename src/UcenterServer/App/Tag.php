<?php

namespace UcenterServer\App;

class Tag extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'gettag' => 'onGet',
        ];
    }

    public function onGet()
    {
        return null;
    }
}
