<?php
/**
 * Created by PhpStorm.
 * User: cals
 * Date: 16-9-27
 * Time: 下午1:03
 */

namespace App\Services\Implementations;


use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Repositories\Interfaces\PostRepositoryInterface as Repository;
use App\Services\Interfaces\PostServiceInterface;
use App\Services\Service;

class PostService extends Service implements PostServiceInterface
{
    protected $repository;

    /**
     * PostService constructor.
     * @param $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        // TODO: Implement index() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store(PostStoreRequest $request)
    {
        // TODO: Implement store() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update(PostUpdateRequest $request)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function indexOfWeb()
    {
        return $this->repository->simplePaginate();
    }

}