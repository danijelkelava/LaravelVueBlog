<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    

    public function store(Request $request)
    {
        try{

            Post::create([
                'title' => request('title'),
                'body' => request('body')
            ]);

        }catch(\Illuminate\Database\QueryException $e){

            dd($e);
            
        }
        

        return redirect()->route('admin');
    }
}
