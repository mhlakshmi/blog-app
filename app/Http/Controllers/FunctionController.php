<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Mail;

use Carbon\Carbon;

class FunctionController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs')->orderBy('id', 'desc')
            ->get();

        return view('index', [
            'blogs' => $blogs,
        ]);
    }

    public function blog_details($id)
    {
        $blogs = DB::table('blogs')->where('slug', $id)->get();
        $related_blogs = $related_blogs = DB::table('blogs')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        return view('blogs-details', [
            'blogs' => $blogs,
            'related_blogs' => $related_blogs,
        ]);
    }


}
