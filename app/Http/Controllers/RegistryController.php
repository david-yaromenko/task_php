<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistryModel;

class RegistryController extends Controller
{
    public function registry()
    {

        $registryBefore = RegistryModel::first() ? RegistryModel::first()->created_at : null;
        $registryAfter = RegistryModel::latest()->first() ? RegistryModel::latest()->first()->created_at : null;

        return view('registry', [
            'before' => $registryBefore,
            'after' => $registryAfter
        ]);
    }

    public function getRegistry(Request $request)
    {

        $before = $request->input('before');
        $after = $request->input('after');

        $registry = RegistryModel::all();

        $registryList = collect();

        foreach ($registry as $material) {
            if ($material->created_at == $before || $after) {
                $registryList->push($material);
            }
        }

        $region = null;
        foreach ($registryList as $regionReg) {
            $region = $regionReg->region;
        }

        return view('registry_materials', [
            'materials' => $registryList,
            'region' => $region
        ]);
    }
}
