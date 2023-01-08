<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace ho_b7\phpmvc\db;
use ho_b7\phpmvc\Application;
use ho_b7\phpmvc\Model;

/**
 * Class DbModel
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package ho_b7\phpmvc;
*/

abstract class DbModel extends Model
{

    abstract static public function tableName(): string;

    abstract public function attributes(): array;

    abstract static public function primaryKey(): string;

    public function save () 
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($a) => ":$a", $attributes);
        $stmt = self::prepare("INSERT INTO $tableName (" . implode(',', $attributes) . ") VALUES(". implode(',', $params) .")");
        
        foreach ($attributes as $attr) {
            $stmt->bindValue(":$attr", $this->{$attr});
        }

        $stmt->execute();
        return true;
    }

    public static function findOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND ",array_map(fn($a) => "$a = :$a", $attributes));
        $stmt = self::prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
        return $stmt->fetchObject(static::class);
    }

    public static function prepare($sql)
    {
        return Application::$app->db->pdo->prepare($sql);
    }
    
}