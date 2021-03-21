<?php

namespace App\Http\Controllers;

use App\Models\{District, Region, Locality};
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index()
    {
        return view('directory.show', [
            'directories' => Locality::with('districts', 'region')->get()
        ]);
    }

    public function getLocalitiesByRegion($regionId)
    {
        $localities = Region::find($regionId);
        dd($localities);
    }

    public function getDistrictsByLocality($localityId)
    {
        $districts = Region::find($localityId);
        dd($districts->localities);
    }

    public function searchFilter() 
    {
        
    }

}
