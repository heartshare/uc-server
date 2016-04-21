<?php

namespace UcenterServer\App;

class User extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'register'        => 'onRegister',
            'login'           => 'onLogin',
            'get_user'        => 'onGet',
            'edit'            => 'onEdit',
            'delete'          => 'onDelete',
            'synlogin'        => 'onSynLogin',
            'synlogout'       => 'onSynLogout',
            'check_email'     => 'onCheckEmail',
            'check_username'  => 'onCheckUsername',
            'addprotected'    => 'onAddProtected',
            'deleteprotected' => 'onDeleteProtected',
            'getprotected'    => 'onGetProtected',
            'merge'           => 'onMerge',
            'merge_remove'    => 'onUnMerge',
        ];
    }

    public function onRegister()
    {
        return null;
    }

    public function onLogin()
    {
        return null;
    }

    public function onGet()
    {
        return null;
    }

    public function onEdit()
    {
        return null;
    }

    public function onDelete()
    {
        return null;
    }

    public function onSynLogin()
    {
        return null;
    }

    public function onSynLogout()
    {
        return null;
    }

    public function onCheckEmail()
    {
        return null;
    }

    public function onCheckUsername()
    {
        return null;
    }

    public function onAddProtected()
    {
        return null;
    }

    public function onDeleteProtected()
    {
        return null;
    }

    public function onGetProtected()
    {
        return null;
    }

    public function onMerge()
    {
        return null;
    }

    public function onUnMerge()
    {
        return null;
    }
}
