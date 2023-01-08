<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace app\core;
use app\core\db\DbModel;

/**
 * Class UserModel
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package app\core;
*/

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}