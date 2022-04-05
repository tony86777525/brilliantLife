<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @param StorePostRequest $request
     */
    public function store(StorePostRequest $request)
    {
        $result = [
            'type' => '0',
            'message' => '發生未知的錯誤,請聯繫我們',
        ];

        $data = $request->validated();

        try {
            $post = new Post();

            $post->name = $data['name'];
            $post->gender = $data['gender'];
            $post->phone = $data['phone'];
            $post->content = $data['content'];

            $post->save();

            $result['type'] = '1';
            $result['message'] = '我們已收到您的諮詢';
        } catch (Exception $e) {}

        return response()->json($result);
    }
}
