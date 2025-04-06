<?php

namespace App\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
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

    /**
     * ユーザー情報を含めた投稿一覧をページネーションして取得
     *
     * @param integer $perPage
     * @return LengthAwarePaginator
     */
    public function getPaginatedPosts(int $perPage = 2): LengthAwarePaginator
    {
        return Post::with('user')->paginate($perPage);
    }
}
