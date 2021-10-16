<?php

namespace App\Imports;

use App\Models\Exam;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExamsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Exam([
            'number' => $row['number'],
            'question' => $row['question'],
            'answer' => $row['answer']
        ]);
    }
}
