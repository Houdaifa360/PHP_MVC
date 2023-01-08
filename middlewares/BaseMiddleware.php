<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace ho_b7\phpmvc\middlewares;

/**
 * Class BaseMiddleware
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package ho_b7\phpmvc\middlewares;
*/

abstract class BaseMiddleware 
{
    abstract public function execute();
}   