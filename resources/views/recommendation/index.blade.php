@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Liste des recommendations
                    </div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <thead>
                                <tr>

                                    <th>Recommendation</th>
                                    <th>Taux de glycémie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recommendations as $recommendation)
                                    <tr>

                                        <td>{{ $recommendation->rec }}</td>
                                        <td>{{ $recommendation->tauxGL }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {!! $recommendations->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
