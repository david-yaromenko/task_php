<?php

namespace App\Http\Controllers;

use App\Models\ActModel;
use App\Models\EmployeeModel;
use App\Models\JobTitle;
use App\Models\MaterialModel;
use App\Models\RegionModel;
use App\Models\RegistryModel;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function choseRegion()
    {
        $region = RegionModel::all();
        return view('create_doc_region_chose', ['regions' => $region]);
    }

    public function getRegionId(Request $request)
    {

        $getId = $request->input('region_id');
        return $this->createDocument($getId);
    }

    public function createDocument(int $regionId)
    {

        $materials = MaterialModel::all();
        $employee = EmployeeModel::all();

        $jobTitleSpec = JobTitle::whereIn('id', [1,2])->get();
        $jobTitleInspec = JobTitle::whereIn('id', [3,4])->get();
        

        $employeeList = collect();
        $materialList = collect();

        foreach ($employee as $emp) {
            if ($emp->region_id == $regionId) {
                $employeeList->push($emp);
            }
        }

        foreach ($materials as $material) {
            if ($material->region_id == $regionId) {
                $materialList->push($material);
            }
        }


        $regions = RegionModel::find($regionId);
        $regionName = $regions->region_name;
        return view(
            'create_document',
            [
                'job_spec' => $jobTitleSpec,
                'job_inspec' => $jobTitleInspec,
                'region_name' => $regionName,
                'materials' => $materialList,
                'employees' => $employeeList,
            ]
        );
    }

    
    public function createAct(Request $request)
    {
        $region = $request->input('region_doc');
        $job_doc = $request->input('job_doc');
        $master_doc = $request->input('master_doc');
        $job_ins_doc = $request->input('job_ins_doc');
        $inspector_doc = $request->input('inspector_doc');

        $material = json_decode($request->input('material_doc'));
        $material2 = json_decode($request->input('material_doc2'));

        //add act
        $createAct = new ActModel();
        $createAct->save();
        //add to registry
        $registry = new RegistryModel();
        $registry->category_material = $material->category_material;
        $registry->name_material = $material->name_material;
        $registry->serial_number = $material->serial_number;
        $registry->inventory_number = $material->inventory_number;
        $registry->region = $region;
        $registry->emp_first = $master_doc;
        $registry->emp_second = $inspector_doc;
        $registry->save();

        $registry2 = new RegistryModel();
        $registry2->category_material = $material2->category_material;
        $registry2->name_material = $material2->name_material;
        $registry2->serial_number = $material2->serial_number;
        $registry2->inventory_number = $material2->inventory_number;
        $registry2->region = $region;
        $registry2->emp_first = $master_doc;
        $registry2->emp_second = $inspector_doc;
        $registry2->save();

        $getIdAct = ActModel::latest()->value('id');
        $getDate = ActModel::latest()->value('created_at');

        return view('act', [
            'region_name' => $region,
            'job_doc' => $job_doc,
            'materials' => $material,
            'materials2' => $material2,
            'master_doc' => $master_doc,
            'job_ins_doc' => $job_ins_doc,
            'inspector_doc' => $inspector_doc,
            'getIdAct' => $getIdAct,
            'getDate' => $getDate
        ]);
    }
}
