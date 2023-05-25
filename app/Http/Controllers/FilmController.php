<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Film;


class FilmController extends Controller
{
    /**
     * get data from api
     *
     * @return response()
     */
    public function get(string $id = null)
    {
        $response = Http::get("https://swapi.dev/api/films/$id");
        $jsonData = $response->json();
        $this->write($jsonData);
    }
}
