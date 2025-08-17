<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use function Pest\Laravel\{getJson, post, put};

beforeEach(function () {
    $this->user = User::factory()->create();
});

test('can list posts', function () {
    Post::factory()->count(2)->create(['user_id' => $this->user->id]);

    $response = getJson('/api/v1/posts');
    $response->assertOk()->assertJsonStructure(['data']);
});

test('can create post with cover upload', function () {
    Storage::fake('public');

    $response = post('/api/v1/posts', [
        'user_id' => $this->user->id,
        'title' => 'Test Post',
        'slug' => 'test-post',
        'description' => 'Body',
        'cover' => UploadedFile::fake()->image('cover.jpg'),
    ], ['Accept' => 'application/json']);

    $response->assertCreated();
    expect(Post::first()->getFirstMediaUrl('cover'))->not->toBeEmpty();
});
