@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Mes Articles</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Categorie</th>
                                <th>Date Creation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{ $article->titre }}</td>
                                        <td>{{ $article->categorie->nom }}</td>
                                        <td>{{ $article->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <a href="{{ route('article.read', ['article' => $article->id]) }}" class="btn btn-sm btn-primary">Lire</a>
                                            <a href="{{ route('article.destroy', ['article' => $article->id]) }}" class="btn btn-sm btn-danger">Supprimer</a>
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
