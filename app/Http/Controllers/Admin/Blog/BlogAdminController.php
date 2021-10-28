<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogAdminController extends Controller
{
    function fetchBlogPosts (){
        return view("admin.blog.blog");
    }

    function fetchSinglePost (){
        return view('admin.blog.blog-details');
    }
}
