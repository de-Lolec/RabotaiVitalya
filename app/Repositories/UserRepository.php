<?php

namespace App\Repositories;

use App\Models\User as Model;
//use Illuminate\Contracts\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class BlogCategoryRepository
 *
 * @package App\Repositories
 */

class UserRepository extends CoreRepository
{
    /*
     * @return string
     */

    protected function getModelClass(): string
    {
        return Model::class;
    }
    /**
     * Получить список статей для вывода в списке
     * (Админка)
     *
     * @return string[]
     */
    public function getAllWithPaginate()
    {

        $columns = [
            'id',
            'name',
            'email',
            'position',
            'age',
            'grade',
            'local'
        ];

        //startConditions у нас создается экземпляр класса BlogPost

        $result = $this->startConditions()
            ->select($columns)
            ->orderBy('id', 'ASC')
            ->paginate(25);
        //dd();
        return $result;
    }


    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

}
