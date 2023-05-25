<?php
namespace App\Exports;

use App\Models\Film;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return Film::get();
    }
}