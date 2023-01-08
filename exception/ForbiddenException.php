<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace app\core\exception;

/**
 * Class ForbiddenException
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package app\core\exception;
*/

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}