<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace ho_b7\phpmvc;

/**
 * Class Response
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package ho_b7\phpmvc;
*/

class Response 
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
    }

}