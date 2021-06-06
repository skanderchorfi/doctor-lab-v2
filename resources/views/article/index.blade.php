@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="row">
                <div class="col-md-10">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                      </div>
                </div>
            </div>
        @endif
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
                                <th>Partager</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{ $article->titre }}</td>
                                        <td>{{ $article->type }}</td>
                                        <td>{{ $article->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <a href="{{ route('article.read', ['article' => $article->id]) }}" class="btn btn-sm btn-primary">Lire</a>
                                            <a href="{{ route('article.destroy', ['article' => $article->id]) }}" class="btn btn-sm btn-danger" id="article-delete">Supprimer</a>
                                        </td>
                                        <td>
                                            <div>
                                            <!-- Facebook -->
                                                   <a target="_blank" title="Facebook" href="https://www.facebook.com/sharer.php?u=https://tontonduweb.com/previews-warc/genieCivil/article1.html" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img src="../../../public/iconrs/facebook_icon.png" alt="Facebook" /></a>
                                            <!-- //Facebook -->

                                            <!-- Twitter -->
                                                    <a target="_blank" title="Twitter" href="https://twitter.com/share?url=https://bit.ly/2sI7H3v" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><img src="plugins/iconrs/twitter_icon.png" alt="Twitter" /></a>
                                            <!-- //Twitter -->

                                            <!-- Google + -->
                                                    <a target="_blank" title="Google +" href="https://plus.google.com/share?url=https://tontonduweb.com/previews-warc/genieCivil/article1.html" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;"><img src="plugins/iconrs/gplus_icon.png" alt="Google Plus" /></a>
                                            <!-- //Google + -->

                                            <!-- Linkedin -->
                                                    <a target="_blank" title="Linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://tontonduweb.com/previews-warc/genieCivil/article1.html" rel="nofollow" onclick="javascript:window.open(this.href, '','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;"><img src="plugins/iconrs/linkedin_icon.png" alt="Linkedin" /></a>
                                            <!-- //Linkedin -->

                                            <!-- Email -->
                                                    <a target="_blank" title="Envoyer par mail" href="mailto:?Subject=Regarde ça c'est cool !&amp;Body=regarde%20cet%20article%20c'est%20super !%20 https://tontonduweb.com/previews-warc/genieCivil/article1.html" rel="nofollow"><img src="plugins/iconrs/email_icon.png" alt="email" /></a>
                                            <!-- //Email -->
                                                </div>

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
