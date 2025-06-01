<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\JobTitle;
use App\Models\RegionModel;
use App\Http\Requests;

class EmployeeController extends Controller
{
    public function employee()
    {
        $region = RegionModel::all();
        $job_titles = JobTitle::all();

        return view('create_employee', [
            'regions' => $region,
            'job_titles' => $job_titles
        ]);

    }

    public function createEmployee(Request $request)
    {

        $valid = $request->validate([
            'emp' => 'required|max:100',
            'job' => 'required|max:100',
            'region' => 'required|max:100',
        ]);

        $createEmp = new EmployeeModel();

        $createEmp->name = $valid['emp'];
        $createEmp->job_id = $valid['job'];
        $createEmp->region_id = $valid['region'];
        $createEmp->save();
        
        session()->flash('employee_created', 'Посадовця додано');
        return redirect('/emp');
    }
}
