<?php

namespace App\Http\Controllers;

use App\Models\MaterialModel;
use App\Models\RegionModel;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function material(){
        $region = RegionModel::all();
        return view('create_material', ['regions' => $region]);
    }

    public function createMaterial(Request $request){

        $validate = $request->validate([
            'name_material' => 'required|max:100',
            'category_material' => 'required',
            'region_material' => 'required',
            'serial_number' => 'required|string|max:255',
            'inventory_number' => 'required|max:255'
        ]);

        $createMaterial = new MaterialModel();
        $createMaterial->name_material= $validate['name_material'];
        $createMaterial->category_material = $validate['category_material'];
        $createMaterial->serial_number = $validate['serial_number'];
        $createMaterial->inventory_number = $validate['inventory_number'];
        $createMaterial->region_id = $validate['region_material'];

        $createMaterial->save();

        session()->flash('material_created', 'Матеріальну цінність додано');
        return redirect('/material');
    }
}
