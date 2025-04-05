<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    /**
     * 受け取ったデータをログインユーザと紐付けて保存
     *
     * @param array $data
     * @return Post
     */
    public function store(array $data): Post
    {
        return auth()->user()->posts()->create($data);
    }
}
