@extends(backpack_view('blank'))

@php
    Widget::add([
        'type' => 'div',
        'class' => 'row',
        'content' => [
            [
                'type'        => 'progress',
                'class'       => 'card text-white bg-danger mb-2',
                'value'       => DB::connection('look4care')->table('patient')->where('sexe', 'F')->count(),
                'description' => 'Nombre de Femmes',
                'progress'    => 57,
            ],
            [
                'type'        => 'progress',
                'class'       => 'card text-white bg-primary mb-2',
                'value'       => DB::connection('look4care')->table('patient')->where('sexe', 'H')->count(),
                'description' => "Nombre d'Hommes",
                'progress'    => 57,
            ],
            [
                'type'        => 'progress',
                'class'       => 'card text-white bg-warning mb-2',
                'value'       => DB::connection('look4care')->table('patient')->count(),
                'description' => "Total des diabetiques",
                'progress'    => 57,
            ],
            [
                'type'        => 'progress',
                'class'       => 'card text-white bg-info mb-2',
                'value'       => \App\Models\User::count(),
                'description' => "Total des Utilisateurs",
                'progress'    => 57,
            ]
        ]
    ]);
    Widget::add([
        'type'    => 'div',
        'class'   => 'row justify-content-center',
        'content' => [
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\NewEntriesChartController::class, 'wrapper' => ['class'=> 'col-md-12'] ],
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\RepartitionUtilisateurChartController::class, 'wrapper' => ['class'=> 'col-md-6']],
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\ArticlePartitionChartController::class, 'wrapper' => ['class'=> 'col-md-6']],
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\TodayUsersChartController::class, 'wrapper' => ['class'=> 'col-md-6']],
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\ProduitPieChartController::class, 'wrapper' => ['class'=> 'col-md-6']]
        ]
    ]);
@endphp


@section('content')
@endsection

