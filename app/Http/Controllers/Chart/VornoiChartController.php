<?php

namespace App\Http\Controllers\Chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VornoiChartController extends Controller
{
    public function data() {
        $data = DB::connection('look4care')->table('cite')->select(['lng', 'lat'])
        ->get()->map(function($e) {
            return [floatval($e->lat), floatval($e->lng)];
        })->toArray();

        return $data;
    }
}
