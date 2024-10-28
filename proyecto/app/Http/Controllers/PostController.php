<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Método para mostrar los últimos 15 posts
    public function index()
    {
        // Obtener solo los últimos 15 posts
        $posts = Post::orderBy('created_at', 'desc')->limit(15)->get();

        return view('blog', ['posts' => $posts]);
    }

    // Método para almacenar un nuevo post
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|max:500' // 500kb de tamaño máximo
        ]);

        // Manejar la carga de la imagen si existe
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Mover la imagen directamente a public/images-post con un nombre único
            $imagePath = 'images-post/' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images-post'), $imagePath);
        }

        // Crear un nuevo post
        Post::create([
            'name' => $request->name,
            'message' => $request->message,
            'image' => $imagePath
        ]);

        // Redirigir al blog
        return redirect()->route('posts.index')->with('success', 'Post creado correctamente');
    }
}
