<?php

namespace App\Http\Controllers\Web;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\PostServiceInterface as Service;

class PostController extends Controller
{
    protected $service;

    /**
     * PostController constructor.
     * @param $service
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd($this->service->indexOfWeb());
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(10);
        return view('web.post.index', ['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('web.post.show', ['post' => $post]);
    }
}
