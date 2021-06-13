@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{ route('categorie.store') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header"><strong>type de diabéte</strong></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input class="form-control" id="nom" name="nom" type="text" placeholder="Nom categorie">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-success">Créer</button>
                            <button type="reset" class="btn btn-sm btn-danger">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
