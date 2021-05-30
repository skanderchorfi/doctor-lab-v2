@extends(backpack_view('blank'))

@php
    Widget::add([
        'type'    => 'div',
        'class'   => 'row',
        'content' => [
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\NewEntriesChartController::class ],
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\WeeklyUsersChartController::class ],
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\ArticlePartitionChartController::class]
        ]
    ]);
@endphp


@section('content')
@endsection

