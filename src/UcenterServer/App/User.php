<?php

namespace UcenterServer\App;

class User extends Base
{
    public function registerMethod()
    {
        $this->methods = [
            'addprotected'    => 'onAddProtected',
            'check_email'     => 'onCheckEmail',
            'check_username'  => 'onCheckUsername',
            'delete'          => 'onDelete',
            'deleteprotected' => 'onDeleteProtected',
            'edit'            => 'onEdit',
            'get_user'        => 'onGet',
            'getprotected'    => 'onGetProtected',
            'login'           => 'onLogin',
            'merge'           => 'onMerge',
            'merge_remove'    => 'onUnMerge',
            'register'        => 'onRegister',
            'synlogin'        => 'onSynLogin',
            'synlogout'       => 'onSynLogout',
        ];
    }

    public function onAddProtected()
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

    public function onDelete()
    {
        return null;
    }

    public function onDeleteProtected()
    {
        return null;
    }

    public function onEdit()
    {
        return null;
    }

    public function onGet()
    {
        return null;
    }

    public function onGetProtected()
    {
        return null;
    }

    public function onLogin()
    {
        return null;
    }

    public function onMerge()
    {
        return null;
    }

    public function onRegister()
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

    public function onUnMerge()
    {
        return null;
    }
}
