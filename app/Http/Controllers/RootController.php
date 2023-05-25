<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class RootController extends Controller
{
     /**
     * get resource
     *
     * @return response()
     */
    public function get_resources(string $resource, string $id = null)
    {
        $controllerName = ucfirst($resource) .'Controller';
        $app = app();
        $controller = $app->make('\App\Http\Controllers\\'. $controllerName );
        $data = $controller->callAction('get', ['id' => $id]);
        return $this->write($data, $resource);
    }

    
    /**
     * write data to csv
     *
     * @var json
     * 
     * @return response()
     */
    private function write($json, $resource)
    {
        //Todo create and write data to csv
        $fileName = "$resource.csv";
        Storage::disk('local')->put($fileName, 'Contents');
        return $this->save($fileName);
    }

    private function save($fileName)
    {
        $filePath = "storage/app/$fileName";
    }
}
