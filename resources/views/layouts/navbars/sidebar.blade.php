<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}" class="simple-text logo-mini">{{ __('DL') }}</a>
            <a href="{{ route('home') }}" class="simple-text logo-normal">{{ __('Doctor Lab') }}</a>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#articles" aria-expanded="true">
                    <i class="fa fa-book" ></i>
                    <span class="nav-link-text" >{{ __('Articles') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="articles">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('article.create')  }}">
                                <i class="fa fa-plus"></i>
                                <p>{{ __('Ajouter') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('article.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Mes Articles') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#categories" aria-expanded="true">
                    <i class="fa fa-book" ></i>
                    <span class="nav-link-text" >{{ __('Type de Diabetes') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="categories">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('categorie.create')  }}">
                                <i class="fa fa-plus"></i>
                                <p>{{ __('Ajouter Type') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categorie.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Types des Diabetes') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#produits" aria-expanded="true">
                    <i class="fa fa-book" ></i>
                    <span class="nav-link-text" >{{ __('Produits') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="produits">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('produit.type', ['type' => \App\Models\Produit::TYPE_2]) }}">
                                <i class="fa fa-pregnant"></i>
                                Produits Pharmacetique
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('produit.type', ['type' => \App\Models\Produit::TYPE_1]) }}">
                                <i class="fa fa-pregnant"></i>
                                Produits Para-Pharmacetique
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('recommendation.index') }}">
                    <i class="fa fa-tasks"></i>
                    Recommendations
                </a>
            </li>
        </ul>
    </div>
</div>
