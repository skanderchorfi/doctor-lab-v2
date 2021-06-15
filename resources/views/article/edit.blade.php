@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-10">
            <form action="{{ url('/article/update') }}" method="post">
                @csrf
                <input type="hidden" name="article" value="{{ $article->id }}">
                <div class="card">
                    <div class="card-header"><strong>Modifier Article</strong></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input class="form-control" value="{{ $article->titre }}" id="titre" name="titre" type="text" placeholder="Nom categorie">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="type">Categorie</label>
                                    <select name="type" id="type" class="form-control">
                                        @foreach(\App\Models\Article::TYPES as $type)
                                            <option value="{{ $type }}">{{ $type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="contenu">Contenu</label>
                                    <textarea name="contenu" id="contenu" cols="30" rows="5" class="form-control">
                                        {{ $article->contenu }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-success">Modifier</button>
                        <button type="reset" class="btn btn-sm btn-danger">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
