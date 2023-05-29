<?php

namespace App\Console\Commands;

use App\Models\Root;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;

class UpdateApiCsvFiles extends Command
{  
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resources:get_resource_from_api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get resources from api and save it to csv in storage';

    /**
     * current links of every resource on api.
     *
     * @var string
     */
    protected static $updateLinks = [];

    /**
     * Array of resources and there imports
     *
     * @var string
     */
    protected static $resourcesModels = [];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
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
