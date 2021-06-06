<?php

namespace App\Http\Controllers\Admin\Charts;

use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Facades\DB;

/**
 * Class BarTrancheAgeChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BarTrancheAgeChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels([
            '0-12', '13-25', '26-40', '41-60', '60+',
        ]);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/bar-tranche-age'));

        $this->chart->minimalist(false);
        $this->chart->displayLegend(true);
    }

    /**
     * Respond to AJAX calls with all the chart data points.
     *
     * @return json
     */
    public function data()
    {
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

        $this->chart->dataset('Histogramme tranche age', 'bar', $data)
        ->color([
            'rgba(237, 76, 103,1.0)',
            'rgba(6, 82, 221,1.0)',
            'rgba(0, 148, 50,1.0)',
            'rgba(255, 195, 18,1.0)',
            'rgba(131, 52, 113,1.0)'
        ])
        ->backgroundColor([
            'rgba(237, 76, 103,1.0)',
            'rgba(6, 82, 221,1.0)',
            'rgba(0, 148, 50,1.0)',
            'rgba(255, 195, 18,1.0)',
            'rgba(131, 52, 113,1.0)'
        ]);
    }

}
