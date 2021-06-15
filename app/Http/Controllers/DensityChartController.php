<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DensityChartController extends Controller
{
    public function data() {
        $data = DB::connection('look4care')
            ->table('patient')
            ->select(['latitude','longitude', 'cite'])
            ->whereNotNull(['latitude','longitude'])
            ->where('cite', '!=', '')
            ->get()
            ->toArray();
        return $data;
    }
}
