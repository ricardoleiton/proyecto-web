<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Importación del modelo Contact

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Crear un nuevo contacto
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirigir a la página de contacto con un mensaje de éxito
        return redirect()->route('contacto')->with('success', 'Mensaje enviado correctamente');
    }
}