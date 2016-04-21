<?php

namespace UcenterServer\App;

class Friend extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'add'      => 'onAdd',
            'delete'   => 'onDelete',
            'ls'       => 'onLs',
            'totalnum' => 'onTotalNum',
        ];
    }

    public function onAdd()
    {
        return null;
    }

    public function onDelete()
    {
        return null;
    }

    public function onLs()
    {
        return null;
    }

    public function onTotalNum()
    {
        return null;
    }
}
