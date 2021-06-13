<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DensityChartController extends Controller
{
    public function data() {
        $data = DB::connection('look4care')
            ->table('cite')->select('population')->whereNotNull('population')->get()
            //->map(function($e) { return $e->population; })
            ->toArray();
        return $data;
    }
}
