<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrancheAgeController extends Controller
{
    public function data() {
        $labels = [
            '0-12', '13-25', '26-40', '41-60', '60+',
        ];

        $data = [0, 0, 0, 0, 0];

        $ages = DB::connection('look4care')
            ->table('patient')
            ->get()
            ->map(function($e) {return today()->diffInYears($e->datenaissance);}) // calcule age
            ->toArray();

        foreach ($ages as $age) {
            if($age <= 12) {
                $data[0] = $data[0] + 1;
            } else if($age >= 13 && $age <= 25) {
                $data[1] = $data[1] + 1;
            } else if ($age >= 26 && $age <= 40) {
                $data[2] = $data[2] + 1;
            } else if ($age >= 41 && $age <= 60) {
                $data[3] = $data[3] + 1;
            } else if($age >= 61) {
                $data[4] = $data[4] + 1;
            }
        }

        return response()->json(compact('data', 'labels'));
    }
}
