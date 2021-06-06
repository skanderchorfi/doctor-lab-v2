<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

/**
 * Class RepartitionUtilisateurChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RepartitionUtilisateurChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels([
            'Activé', 'Non Activé',
        ]);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/repartition-utilisateur'));

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
        $activated = User::query()->where('active', '1')->count();
        $deActivated = User::query()->where('active', '0')->count();

        $this->chart->dataset('Users Created', 'pie', [$activated, $deActivated])
            ->color([
                'rgba(52, 152, 219,1.0)',
                'rgba(231, 76, 60,1.0)'
            ])
            ->backgroundColor([
                'rgba(52, 152, 219,1.0)',
                'rgba(231, 76, 60,1.0)'
            ]);
    }
}
