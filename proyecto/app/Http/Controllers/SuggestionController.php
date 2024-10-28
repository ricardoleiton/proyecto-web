<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'suggestion' => 'required|string|max:255',
        ]);

        // Guardar la sugerencia en la base de datos
        $suggestion = new Suggestion();
        $suggestion->suggestion = $request->input('suggestion');
        $suggestion->save();

        // Almacenar la sugerencia en una cookie por 3 meses
        return redirect()->back()->with('success', 'Gracias por tu sugerencia!!')
            ->cookie('suggestion', $suggestion->suggestion, 43200); // 43200 minutos = 30 días
    }
}