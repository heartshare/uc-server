<?php

namespace UcenterServer\App;

class Pm extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'check_newpm'    => 'onChecknew',
            'sendpm'         => 'onSend',
            'delete'         => 'onDelete',
            'ignore'         => 'onIgnore',
            'ls'             => 'onLs',
            'view'           => 'onView',
            'viewnode'       => 'onViewNode',
            'blackls_get'    => 'onBlackListGet',
            'blackls_set'    => 'onBlackListSet',
            'blackls_add'    => 'onBlackListAdd',
            'blackls_delete' => 'onBlackListDelete',
        ];
    }

    public function onChecknew()
    {
        return null;
    }

    public function onSend()
    {
        return null;
    }

    public function onDelete()
    {
        return null;
    }

    public function onIgnore()
    {
        return null;
    }

    public function onLs()
    {
        return null;
    }

    public function onView()
    {
        return null;
    }

    public function onViewNode()
    {
        return null;
    }

    public function onBlackListGet()
    {
        return null;
    }

    public function onBlackListSet()
    {
        return null;
    }

    public function onBlackListAdd()
    {
        return null;
    }

    public function onBlackListDelete()
    {
        return null;
    }
}
