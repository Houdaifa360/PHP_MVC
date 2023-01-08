<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace ho_b7\phpmvc\exception;

/**
 * Class ForbiddenException
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package ho_b7\phpmvc\exception;
*/

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}