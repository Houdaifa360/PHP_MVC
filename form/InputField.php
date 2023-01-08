<?php 

/** 
 * User: Houdaifa (tut: TheCodeHolic) 
 * Date : 03/01/2023
 * App: PHP MVC Framework
 *
*/

namespace app\core\form;
use app\core\Model;

/**
 * Class InputField
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package app\core\form;
*/

class InputField extends BaseField
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_EMAIL = 'email';
    public string $type;

    public function __construct(Model $model, string $attr)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attr);
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function emailField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf('<input type="%s" name="%s" value="%s" class="form-control %s">', 
                        $this->type,
                        $this->attr,
                        $this->model->{$this->attr},
                        $this->model->hasError($this->attr) ? 'is-invalid' : '',
                    );
    }

}