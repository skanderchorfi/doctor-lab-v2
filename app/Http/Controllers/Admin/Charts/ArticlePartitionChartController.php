<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Models\Article;
use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
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

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels(
            Article::TYPES
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

        $articleType1 = Article::query()->where('type', Article::TYPE_1)->count();
        $articleType2 = Article::query()->where('type', Article::TYPE_2)->count();
        $articleTypeGestationel = Article::query()->where('type', Article::TYPE_GESTATIONEL)->count();

        $this->chart->dataset('Repartition des Article', 'pie', [
            $articleType1, $articleType2, $articleTypeGestationel
        ])->color([
            'rgba(85, 230, 193,1.0)',
            'rgba(234, 181, 67,1.0)',
            'rgba(253, 114, 114,1.0)'
        ])->backgroundColor([
            'rgba(85, 230, 193,1.0)',
            'rgba(234, 181, 67,1.0)',
            'rgba(253, 114, 114,1.0)'
        ]);
     }
}
