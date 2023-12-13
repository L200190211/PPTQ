<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article()
    {
        return view('admin.article.index');
    }
    public function add()
    {
        return view('admin.article.add');
    }
}
