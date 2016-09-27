<?php
/**
 * Created by PhpStorm.
 * User: cals
 * Date: 16-9-27
 * Time: 下午12:56
 */

namespace App\Services\Interfaces;


use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

interface PostServiceInterface
{
    public function index();
    public function create();
    public function store(PostStoreRequest $request);
    public function show($id);
    public function edit($id);
    public function update(PostUpdateRequest $request);
    public function destroy($id);
    public function indexOfWeb();
}