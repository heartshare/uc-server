<?php

namespace UcenterServer\App;

class Friend extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'delete'   => 'onDelete',
            'add'      => 'onAdd',
            'totalnum' => 'onTotalNum',
            'ls'       => 'onLs',
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

    public function onDelete()
    {
        return null;
    }

    public function onTotalNum()
    {
        return null;
    }
}
