<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Film;
use App\Exports\FilmExport;
use Maatwebsite\Excel\Facades\Excel;


class FilmController extends Controller
{
    /**
     * get data from api
     *
     * @return response()
     */
    public function get(string $id = null)
    {
        $id = $id === 'all' ? '' : $id;
        $response = Http::get("https://swapi.dev/api/films/$id");
        $jsonData = $response->json();
        return $jsonData;
    }

    public function export() 
    {
        return Excel::store(new FilmExport, 'films.csv');
    }
}
