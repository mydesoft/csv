<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentsExport;


class StudentController extends Controller
{
    public function importExcel(Request $request){
        $student = Excel::import(new StudentsImport, $request->excel);

        if ($student) {
            
            return redirect('/')->with('success', 'Uploaded Successfully');
        }
        else{
            return back()->with('error', 'Upload not successful');
        }
    }

    public function exportExcel(Request $request){

        return Excel::download(new StudentsExport, 'students.xlsx');
    }
}
