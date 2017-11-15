<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        # code...
        $title='Her Intranet of Things';
        //compact explained;
        $viewdata = array('title' => 'Her Intranet of Things');
        //compact's equivalent
        $viewData2 = compact('title');
        return view("blog.index", compact('title'));
    }
}
