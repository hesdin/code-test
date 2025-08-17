<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Http\Responses\ApiResponse;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(protected PostService $service)
    {
    }

    public function index(Request $request)
    {
        $posts = Post::paginate();
        return ApiResponse::ok(PostResource::collection($posts));
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $cover = $request->file('cover');
        unset($data['cover']);

        $post = $this->service->create($data, $cover);

        return ApiResponse::created(new PostResource($post));
    }

    public function show(Post $post)
    {
        return ApiResponse::ok(new PostResource($post));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        $cover = $request->file('cover');
        unset($data['cover']);

        $post = $this->service->update($post, $data, $cover);

        return ApiResponse::ok(new PostResource($post));
    }

    public function destroy(Post $post)
    {
        $this->service->delete($post);
        return ApiResponse::noContent();
    }
}
