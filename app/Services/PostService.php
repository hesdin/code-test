<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\UploadedFile;

class PostService
{
    public function create(array $data, ?UploadedFile $cover = null): Post
    {
        $post = Post::create($data);

        if ($cover) {
            $post->addMedia($cover)->toMediaCollection('cover');
        }

        return $post;
    }

    public function update(Post $post, array $data, ?UploadedFile $cover = null): Post
    {
        $post->update($data);

        if ($cover) {
            $post->clearMediaCollection('cover');
            $post->addMedia($cover)->toMediaCollection('cover');
        }

        return $post;
    }

    public function delete(Post $post): void
    {
        $post->delete();
    }
}
