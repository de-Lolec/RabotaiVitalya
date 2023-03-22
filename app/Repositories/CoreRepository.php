<?php

namespace App\Repositories;

use App\Models\User as Model;
//use Illuminate\Database\Eloquent\Model;

/*
 * CLass CoreRepository
 *
 * @package App\Repositories
 *
 */

abstract class CoreRepository
{
    /**
     * @var Model
     */

    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    protected function startConditions()
    {
        return clone $this->model;
    }
}
