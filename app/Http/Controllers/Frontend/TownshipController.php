<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Township;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TownshipController extends Controller
{
    // township data fetch
    public function fetchTownships(Request $request)
    {
        $regionId = $request->input('region_id');

        // Fetch townships based on the region ID
        $townships = Township::where('region_id', $regionId)->get();

        return response()->json($townships);
    }
}
