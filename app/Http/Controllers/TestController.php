<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Root;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;


class TestController extends Controller
{
    public function export() {
        $links = Root::get_all();
        
        foreach ($links as $name => $link) {
            $rows = Http::get($link);
            $formatedRows = json_decode($rows, true);
            $headers = array_keys($formatedRows['results'][1]);
            $exportName = 'App\\Exports\\' .ucfirst($name) .'Export';
            $export = new $exportName($formatedRows['results'], $headers);
            Excel::store($export, "$name.csv");
        }
    }
}
