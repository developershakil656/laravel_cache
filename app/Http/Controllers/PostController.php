<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index(){

        $posts = Cache::get('posts', function () {
            $posts = Post::with('user')->limit(2000)->get();
            Cache::forever('posts', $posts);

            return $posts;
        });

        // $posts= Cache::get('posts');
        // return $posts;

        return view('welcome',compact('posts'));
    }

    public function update($id){
        $post = Post::with('user')->find($id);

        $post->title = 'this title has updated';
        $post->content='this is a new content for testing purpose';
        $post->update();

        return redirect()->back();
    }

    public function create(){
        $post = new Post;

        $post->title = 'this title has created';
        $post->content='this is a new content for testing purpose';
        $post->image='';
        $post->user_id=rand(1,10);
        $post->save();

        return redirect()->back();
    }

    public function delete($id){
        $post = Post::find($id);

        $post->delete();

        return redirect()->back();
    }
}
