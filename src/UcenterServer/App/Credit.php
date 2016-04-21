<?php

namespace UcenterServer\App;

class Credit extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'request' => 'onRequest',
        ];
    }

    public function onRequest()
    {
        return null;
    }
}
