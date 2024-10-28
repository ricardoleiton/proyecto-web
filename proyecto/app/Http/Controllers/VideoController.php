<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        // apiKey = Clave api cuenta google
        $apiKey = 'AIzaSyCqVj62AtA35gzx4I2U6QTtW1K_gwTp_i4';
        $searchQuery = 'Lugares turísticos de Mendoza Argentina';
        $maxResults = 10;
        $apiUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&type=video&key={$apiKey}&q=" . urlencode($searchQuery) . "&maxResults={$maxResults}";

        // Realiza la solicitud a la API de YouTube
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);

        // Verifica si hay resultados
        if (isset($data['items'])) {
            $videos = $data['items'];
        } else {
            $videos = [];
        }

        // Retorna la vista con los datos de los videos
        return view('videos', compact('videos'));
    }
}
