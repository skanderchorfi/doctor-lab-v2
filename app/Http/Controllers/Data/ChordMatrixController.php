<?php
namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChordMatrixController extends Controller
{
    public function handle()
    {
        $counts = DB::connection('look4care')->table('chord')->get()->count();

        $nameProvider = collect([]);

        $temps = DB::connection('look4care')->table('chord')->select('temp')->distinct()->get()->map(function ($elm) {
            return $elm->temp;
        });
        $tgs = DB::connection('look4care')->table('chord')->select('tg')->distinct()->get()->map(function($elm){
            return $elm->tg;
        });
        $pos = DB::connection('look4care')->table('chord')->select('pos')->distinct()->get()->map(function ($elm){
            return $elm->pos;
        });

        $nameProvider->push($temps);

        $nameProvider->push($tgs);

        $nameProvider->push($pos);

        $nameProvider = $nameProvider->flatten();

        $matrix = [];

        for ($i = 0; $i < $nameProvider->count(); $i++) {
            $line = [];
            for ($j = 0; $j < $nameProvider->count(); $j++) {
                if ($i === $j) {
                    $line[] = 0;
                    continue;
                }
                $first = $nameProvider->get($i);
                $second = $nameProvider->get($j);
                if ($temps->contains($first) && $temps->contains($second)) {
                    $line[] = 0;
                    continue;
                }

                if ($tgs->contains($first) && $tgs->contains($second)) {
                    $line[] = 0;
                    continue;
                }

                if ($pos->contains($first) && $pos->contains($second)) {
                    $line[] = 0;
                    continue;
                }

                if ($temps->contains($first)) {
                    if ($tgs->contains($second)) {
                        // temp, tgs
                        $result = DB::connection('look4care')->table('chord')->groupBy('temp', 'tg')
                            ->having('temp', '=', $first)
                            ->having('tg', '=', $second)
                            ->count();
                        $line[] = $result/$counts;
                    }else {
                        // temp, pos
                        $result = DB::connection('look4care')->table('chord')->groupBy('temp', 'pos')
                            ->having('temp', '=', $first)
                            ->having('pos', '=', $second)
                            ->count();
                        $line[] = $result/$counts;
                    }
                }

                if ($tgs->contains($first)) {
                    if ($temps->contains($second)) {
                        // tgs, temp
                        $result = DB::connection('look4care')->table('chord')->groupBy('tg', 'temp')
                            ->having('temp', '=', $second)
                            ->having('tg', '=', $first)
                            ->count();
                        $line[] = $result/$counts;
                    } else {
                        // tgs, pos
                        $result =DB::connection('look4care')->table('chord')->groupBy('tg', 'pos')
                            ->having('tg', '=', $first)
                            ->having('pos', '=', $second)
                            ->count();
                        $line[] = $result/$counts;
                    }
                }

                if ($pos->contains($first)) {
                    if ($temps->contains($second)) {
                        $result = DB::connection('look4care')->table('chord')->groupBy('pos', 'temp')
                            ->having('pos', '=', $first)
                            ->having('temp', '=', $second)
                            ->count();
                        $line[] = $result/$counts;
                    }else {
                        $result = DB::connection('look4care')->table('chord')->groupBy('pos', 'tg')
                            ->having('pos', '=', $first)
                            ->having('tg', '=', $second)
                            ->count();
                        $line[] = $result/$counts;
                    }
                }
            }

            $matrix[] = $line;
        }

        return new JsonResponse([
            'matrix' => $matrix,
            'nameProvider' => $nameProvider
        ]);
    }
}