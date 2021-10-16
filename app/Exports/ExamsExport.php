<?php

namespace App\Exports;

use App\Models\Exam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;


class ExamsExport implements FromQuery, WithMapping, WithHeadings
{ 

    public function headings():array{
        return [
             'Number',
             'Question',
             'Answer'
         ];
     }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Exam::orderBy('created_at', 'asc');
    }

    public function map($exam):array
    {
        return [
            $exam->number,
            $exam->question,
            $exam->answer,
        ];
    }
 
}
