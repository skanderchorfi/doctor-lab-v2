@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Liste des types de diabéte</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Articles</th>
                                    <th>Date creation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $categorie)
                                    <tr>
                                        <td>{{ $categorie->nom }}</td>
                                        <td>{{ $categorie->articles->count() }}</td>
                                        <td>{{ $categorie->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <a href="{{ route('categorie.destroy', ['categorie' => $categorie->id]) }}" class="btn btn-sm btn-danger">Supprimer</a>
                                        </td>
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
