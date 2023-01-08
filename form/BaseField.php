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
 * Class BaseField
 * 
 * @author houdaifa <boucena214@gmail.com>
 * @package app\core\form;
*/

abstract class BaseField 
{
    public Model $model;
    public string $attr;

    public function __construct(Model $model, string $attr)
    {
        $this->model = $model;
        $this->attr = $attr;
    }

    abstract public function renderInput(): string;

    public function __toString() 
    {
        return sprintf('<div class="form-group mb-2">
                            <label>%s</label>
                            %s
                            <div class="invalid-feedback">%s</div>
                        </div>', 
                        $this->model->getLabel($this->attr),
                        $this->renderInput(),
                        $this->model->getFirstError($this->attr),
                    );
    }
}