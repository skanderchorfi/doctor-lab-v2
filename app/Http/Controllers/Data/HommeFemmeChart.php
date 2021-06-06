<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HommeFemmeChart extends Controller
{
    public function data() {
        $labels = ['Hommes', 'Femmes'];

        $data = [
            DB::connection('look4care')->table('patient')->where('sexe', 'F')->count(),
            DB::connection('look4care')->table('patient')->where('sexe', 'H')->count(),
        ];

        return response()->json(compact('labels', 'data'));
    }
}
