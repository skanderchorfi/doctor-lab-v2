@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card card-chart">
                <div class="card-header">
                    Chart 1
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card card-chart">
                <div class="card-header">
                    Chart 2
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card card-tasks">
                <div class="card-header ">
                    <h6 class="title d-inline">Articles</h6>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Auteur</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->titre }}</td>
                                    <td>{{ $article->user->name }}</td>
                                    <td>
                                        <a href="{{ route('article.read', ['article' => $article->id]) }}" class="btn btn-primary">Lire</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Recommendations</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter">
                            <thead class="text-primary">
                                <tr>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Recommendation</th>
                                    <th>tauxGL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recommendations as $recommendation)
                                    <tr>
                                        <td>{{ $recommendation->date }}</td>
                                        <td>{{ $recommendation->heure }}</td>
                                        <td>{{ $recommendation->rec }}</td>
                                        <td>{{ $recommendation->tauxGL }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
