<?php

namespace App\Routing;

use App\Controller\ErrorController;
use App\Controller\UserController;

class UserRouter extends AbstractRouter {
    public static function route(?string $action = null)
    {
        $controller = new UserController();
        switch ($action) {
            case 'index':
                $controller->index();
                break;
            case 'inscription':
                $controller->inscription();
                break;
            case 'connection':
                $controller->connection();
                break;
            default:
                (new ErrorController())->error404($action);
        }
    }
}
