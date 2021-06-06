<?php

namespace App\Http\Controllers\Admin\Charts;

use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Facades\DB;

/**
 * Class NHLPieChartChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NHLPieChartChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels([
            'N', 'H', 'L',
        ]);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/n-h-l-pie-chart'));

        // OPTIONAL
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
        $data = [
            DB::connection('look4care')->table('tauxglucose')->where('nom', 'N')->count(),
            DB::connection('look4care')->table('tauxglucose')->where('nom', 'H')->count(),
            DB::connection('look4care')->table('tauxglucose')->where('nom', 'L')->count(),
        ];

        $this->chart->dataset('NHL Repartition', 'pie', $data)
            ->color([
                'rgba(205, 100, 45, 1)',
                'rgba(205, 240, 31, 1)',
                'rgba(102, 98, 80, 1)',
            ])->backgroundColor([
                'rgba(205, 100, 45, 1)',
                'rgba(205, 240, 31, 1)',
                'rgba(102, 98, 80, 1)',
            ]);
    }
}
