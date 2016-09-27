<?php
/**
 * Created by PhpStorm.
 * User: cals
 * Date: 16-9-27
 * Time: 下午12:30
 */

namespace App\Repositories\Interfaces;


interface PostRepositoryInterface
{
    public function simplePaginate($perPage = 15, $columns = array('*'));
}