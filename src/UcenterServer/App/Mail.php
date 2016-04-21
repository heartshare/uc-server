<?php

namespace UcenterServer\App;

class Mail extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'add' => 'onAdd',
        ];
    }

    public function onAdd()
    {
        return null;
    }
}
