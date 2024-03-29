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
 * Class TextareaField
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package ho_b7\phpmvc\form;
*/

class TextareaField extends BaseField
{
    public function __construct(Model $model, string $attr)
    {
        parent::__construct($model, $attr);
    }

    public function renderInput(): string
    {
        return sprintf('<textarea name="%s" class="form-control %s" >%s</textarea>', 
                        $this->attr,
                        $this->model->hasError($this->attr) ? 'is-invalid' : '',
                        $this->model->{$this->attr},
                    );
    }

}