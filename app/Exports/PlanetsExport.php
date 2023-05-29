<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlanetsExport implements FromCollection, WithHeadings
{
    protected $data;
    protected $headers;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function __construct($data, $headers)
    {
        $this->data = $data;
        $this->headers = $headers;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function collection()
    {
        return collect($this->data);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings() :array
    {
        return $this->headers;
    }
}
