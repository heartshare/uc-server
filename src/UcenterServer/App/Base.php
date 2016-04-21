<?php

namespace UcenterServer\App;

class Base
{
    protected $methods;

    public function __construct()
    {
        if (method_exists($this, 'registerMethod')) {
            $this->registerMethod();
        }
    }

    public function run($action)
    {
        if (array_key_exists($action, $this->methods) && method_exists($this, $this->methods[$action])) {
            return $this->{$this->methods[$action]}();
        } else {
            throw new \Exception('Action not found');
        }
    }
}
