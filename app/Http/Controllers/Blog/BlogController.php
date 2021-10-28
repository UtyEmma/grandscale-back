<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Library\Response\Status;
use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller{

    function fetch (Request $request) {
        try {
            $query = Blog::query();

            $query->when($request->limit, function($q, $limit){
                return $q->limit($limit);
            });
            $posts = $request->limit ? $query->paginate(6) :  $query->get();
        } catch (Exception $e) {
            return Status::error($e->getCode(), $e->getMessage());
        }

        return Status::success("", [
            'post' => $posts
        ]);
    }

    function single(Request $request, $slug) {
        try {
            $post = Blog::where('slug', $slug)->first();
        } catch (Exception $e) {
            return Status::error($e->getCode(), $e->getMessage());
        }

        return Status::success("Post", [
            'post' => $post
        ]);
    }

}
