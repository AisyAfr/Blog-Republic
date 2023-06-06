<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
        $this->middleware('auth');
        $this->middleware('isAdmin');
        $this->middleware('verified');
     }

    public function index()
    {
        // if(!Auth::check()) {
        //     return redirect ('login');
        // }

        $posts = Post::get();
        $postingan = $posts -> count();
        $postingandihapus = Post::onlyTrashed()->count();
        $view_data = [
            'posts' => $posts,
            'postingan' => $postingan,
            'postingandihapus' => $postingandihapus
        ];
        return view('posts.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        $title = $request -> input('title');
        $content = $request -> input('content');

        Post::create([
            'title' => $title,
            'content' => $content,
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        $selected_post = Post:: where('slug', $slug)->first();        
        $comments = $selected_post -> comments() -> limit(100000000) -> get();
        $total_comments = $comments -> count();
        $data = [
            'p' => $selected_post,
            'comments' => $comments,
            'total_comments' => $total_comments
        ];
        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        $selected_post = Post::where('slug',$slug)
        ->first();        
        $data = [
            'p' => $selected_post
        ];
        return view('posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        $title = $request -> input('title');
        $content = $request -> input('content');

        Post::where('slug', $slug)->update([
            'title' => $title,
            'content' => $content,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
         
        return redirect("posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        Post::selectByID($id)->delete();
        return redirect('posts');
    }

    public function trash()
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        $trash_posts = Post::onlyTrashed()->get();

        $data = [
            'posts' => $trash_posts
        ];

        return view('posts.recyclebin',$data);
    }

    public function permanents($id) 
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        Post::selectById($id)->forceDelete();

        return redirect('posts/trash');
    }

    public function undo($id) 
    {
        if(!Auth::check()) {
            return redirect ('login');
        }
        Post::selectById($id)->restore();

        return redirect('posts/trash');
    }


}
