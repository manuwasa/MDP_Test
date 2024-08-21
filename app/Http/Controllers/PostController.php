<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function index()
    {
        //
        $data = DB::table('posts')
            ->join('categories', 'posts.id_kategori', '=', 'categories.id')
            ->join('users', 'posts.id_user', '=', 'users.id')
            ->select('posts.id', 'posts.image', 'posts.title', 'posts.published_at', 'users.name', 'categories.kategori')
            ->get();

        return view('post', [
            'title' => 'Post',
            'posts' => $data
        ]);
    }


    public function create()
    {
        //
        $categories = Category::all();
        return view('postCreate', [
            'title' => 'Tambah Post',
            'categories' => $categories
        ]);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title'     => 'required',
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'body'     => 'required',
            'category' => 'required'
        ]);
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        $blog = Post::create([
            'title'     => $request->title,
            'image'     => $image->hashName(),
            'body'   => $request->body,
            'excerpt' => $request->body,
            'id_kategori' => $request->category,
            'id_user' => 0

        ]);

        return redirect()->route('post.index');
    }


    public function show($id)
    {
        //

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $post = post::findOrFail($id);
        Storage::disk('local')->delete('public/posts/' . $post->image);
        $post->delete();
    }
}
