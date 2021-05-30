@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> {{ $article->titre }}</div>
                    <div class="card-body">
                        {{ $article->contenu }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
