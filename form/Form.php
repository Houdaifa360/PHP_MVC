<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace ho_b7\phpmvc\form;
use ho_b7\phpmvc\Model;

/**
 * Class Form
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package ho_b7\phpmvc\form;
*/

class Form 
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function InputField(Model $model, $attr)
    {
        return new InputField($model, $attr);
    }

    public function TextField(Model $model, $attr)
    {
        return new TextareaField($model, $attr);
    }
}