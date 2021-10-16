<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsExport implements FromQuery, WithHeadings, WithMapping
{
    public function headings():array{
       return [
        'Name',
        'Course',
        'Registration Number',
        'Time Registered',
       ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Student::orderBy('created_at', 'asc');
    }

    public function map($student):array{
        return [
            $student->name,
            $student->course,
            $student->reg_number,
            $student->created_at->diffForHumans(),
        ];
    }
}
