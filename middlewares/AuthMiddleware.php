<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace ho_b7\phpmvc\middlewares;
use ho_b7\phpmvc\Application;
use ho_b7\phpmvc\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package ho_b7\phpmvc\middlewares;
*/

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if(Application::isGuest()) {
            if(empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}