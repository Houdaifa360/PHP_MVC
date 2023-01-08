<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace app\core\middlewares;

/**
 * Class BaseMiddleware
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package app\core\middlewares;
*/

abstract class BaseMiddleware 
{
    abstract public function execute();
}   