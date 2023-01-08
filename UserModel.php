<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace ho_b7\phpmvc;
use ho_b7\phpmvc\db\DbModel;

/**
 * Class UserModel
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package ho_b7\phpmvc;
*/

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}