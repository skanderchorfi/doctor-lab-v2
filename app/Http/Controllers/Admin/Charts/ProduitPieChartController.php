<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Models\Produit;
use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

/**
 * Class ProduitPieChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProduitPieChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels([
            'Pharmacetique', 'Para Pharmaceutique',
        ]);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/produit-pie'));

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
         $this->chart->dataset('Produits', 'pie', [
                    Produit::query()->where('type', Produit::TYPE_1)->count(),
                    Produit::query()->where('type', Produit::TYPE_2)->count(),
                 ])
            ->color(['rgba(205, 32, 31, 1)', 'rgba(205, 150, 81, 1)'])
             ->backgroundColor(['rgba(205, 32, 31, 0.4)', 'rgba(205, 150, 81, 0.4)']);
    }
}
