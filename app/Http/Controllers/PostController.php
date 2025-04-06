<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Services\PostService;

class PostController extends Controller
{
    protected PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * 投稿一覧ページを表示
     *
     * @return View
     */
    public function index(): View
    {
        $posts = $this->postService->getPaginatedPosts();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * 投稿機能
     * ユーザが入力した値を保存し、投稿一覧ページを表示
     *
     * @param StorePostRequest $request
     * @return View
     */
    public function store(StorePostRequest $request): View
    {
        $input = $request->validated();
        $post = $this->postService->store($input);
        return view('post.index', compact('post'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
