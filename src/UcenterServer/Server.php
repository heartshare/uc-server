<?php

namespace UcenterServer;

class Server
{
    public static function run($method, $action, $params)
    {
        if (in_array($m, ['app', 'frame', 'user', 'pm', 'pm_client', 'tag', 'feed', 'friend', 'domain', 'credit', 'mail', 'version'])) {
            return $m;
        } else {
            return 'Module not found!';
        }
    }
}
