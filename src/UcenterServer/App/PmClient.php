<?php

namespace UcenterServer\App;

class PmClient extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'ls' => 'onLs',
        ];
    }
    public function onLs()
    {
        return null;
    }
}
