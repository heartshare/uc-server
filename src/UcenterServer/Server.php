<?php

namespace UcenterServer;

class Server
{
    public static function run($app, $action)
    {
        $class = 'UcenterServer\\App\\' . (($app == 'pm_client') ? 'PmClient' : ucwords($app));
        if (class_exists($class)) {
            $model = new $class();
            return $model->run($action);
        } else {
            throw new \Exception('Model not found');
        }
    }
}
