<?php

namespace App\Http\Controllers\Admin\Charts;

use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Models\Categorie ;
use Illuminate\Support\Facades\DB;

/**
 * Class ArticlePartitionChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ArticlePartitionChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        $categories = Categorie::all('nom')
            ->map(function ($elm) {return $elm->nom;} )
            ->toArray();

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels(
            $categories
        );

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/article-partition'));

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
         $articlesGrouped = DB::table('articles')
             ->select('categorie_id', DB::raw('count(*) as total'))
             ->groupBy('categorie_id')
             ->get();

         foreach ($articlesGrouped as $elm) {
             $this->chart->dataset($elm->categorie_id, 'pie', [
                 $elm->total,
             ]);
         }
     }
}
