<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NHLChart extends Controller
{
    public function data() {
        $data = [
            DB::connection('look4care')->table('tauxglucose')->where('nom', 'N')->count(),
            DB::connection('look4care')->table('tauxglucose')->where('nom', 'H')->count(),
            DB::connection('look4care')->table('tauxglucose')->where('nom', 'L')->count(),
        ];

        $labels = ['N', 'H', 'L'];

        return compact('labels', 'data');
    }
}
