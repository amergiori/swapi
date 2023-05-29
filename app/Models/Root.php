<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;

class Root extends Model
{
    use HasFactory;

    protected $table = 'root';
    protected static $rootLink = 'https://swapi.dev/api/';


    protected static function get_all() 
    {
        $updateLinksJson = Http::get(self::$rootLink);
        $updatedLinks = json_decode($updateLinksJson, true);
        return $updatedLinks;
    }
}
