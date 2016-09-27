<?php
/**
 * Created by PhpStorm.
 * User: cals
 * Date: 16-9-27
 * Time: 下午1:01
 */

namespace App\Repositories\Implementations;


use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Repository;

class PostRepository extends Repository implements PostRepositoryInterface
{
    public function model()
    {
        return 'App\Models\Post';
    }

    public function simplePaginate($perPage = 15, $columns = array('*'))
    {
        return $this->model->simplePaginate($perPage, $columns);
    }
}