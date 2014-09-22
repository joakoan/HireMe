<?php
/**
 * Created by PhpStorm.
 * User: Joaquin
 * Date: 21-09-14
 * Time: 2:13 AM
 */

namespace HireMe\Repositories;


abstract class BaseRepo {

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract public function getModel();


    public function find($id)
    {
        return $this->model->find($id);
    }
} 