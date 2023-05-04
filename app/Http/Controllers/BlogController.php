<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        return view('Welcome');
    }

    public function Home()
    {
        $post = Post::all();
        return view('Home', ['posts' => $post]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function produtos()
    {
        $busca = request('search');

        return view('products', 
        [
            'busca' => $busca
        ]);
    }

    public function perfil()
    {
        return view('perfil');
    }



    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->title;
        $post->private = $request->private;
        $post->description = $request->description;
        $post->items = $request->items;
        $post->date = $request->date;

        // Image upload

        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . '.' . $extension);

            $request->image->move(public_path('img/post'), $imageName);

            $post->image = $imageName;
        }

        $post->save();

        return redirect('/Home')->with('msg', 'Evento criado com sucesso!');
    }
    public function show($id)
    {
        $posts = Post::findOrFail($id);

        return view('post.view', ['posts' => $posts]);
    }
}
