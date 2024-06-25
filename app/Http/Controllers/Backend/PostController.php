<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //index page
    public function PostIndex()
    {
        $posts = Post::paginate(10);
        return view('backend.post.index',compact('posts'));
    }

    // create page
    public function PostCreate()
    {
        return view('backend.post.create');
    }

    // store
    public function PostStore(Request $request)
    {
        Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status
        ]);

        return redirect()->route('PostIndex')->with('message','Forum Post Created Successfully.');
    }

    // edit page
    public function Postedit($id)
    {
        $post = Post::find($id);
        return view('backend.post.edit',compact('post'));
    }

    public function PostUpdate(Request $request,$id)
    {
        $posts = [
            'title' => $request->title,
            'description' => $request->description,
            'status'=>$request->status
        ];
        Post::where('id',$id)->update($posts);
        return redirect()->route('PostIndex')->with('message','Forum Post Updated Successfully.');
    }
}
