<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExamsImport;
use App\Exports\ExamsExport;
use Maatwebsite\Excel\Facades\Excel;

class ExamController extends Controller
{
    public function importCsv(Request $request){
        $exam = Excel::import(new ExamsImport, $request->csv);

        if ($exam) {
            
            return redirect('/')->with('success', 'Uploaded Successfully');
        }
        else{
            return back()->with('error', 'Upload not successful');
        }
    }

    public function exportCsv(Request $request){
        
        $exam = Excel::store(new ExamsExport, 'examinations.csv', 'public\files');
             
    }
}
