<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class RootController extends Controller
{
    private $app;
    private $controller;

    public function __construct()
    {
        $this->app = app();
    }

     /**
     * get resource
     *
     * @return response()
     */
    public function get_resources(string $resource, string $id = null)
    {
        $controllerName = ucfirst($resource) .'Controller';
        $this->controller = $this->app->make('\App\Http\Controllers\\'. $controllerName );
        $data = $this->controller->callAction('get', ['id' => $id]);
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
        $fileName = $this->controller->export($json);
        return $this->save($fileName);
    }
}
