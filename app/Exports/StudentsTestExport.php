<?php

namespace App\Exports\Students;

use App\model\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentsTestExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Students::all();
    }
}
