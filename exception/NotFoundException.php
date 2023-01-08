<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace app\core\exception;

/**
 * Class NotFoundException
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package app\core\exception;
*/

class NotFoundException extends \Exception
{
    protected $message = 'Page Not Found';
    protected $code = 404;

}