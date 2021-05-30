<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
</li>

<li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle c-active" href="#">
        <i class="c-sidebar-nav-icon cil-book"></i> Articles
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('article.create') }}">
                <span class="c-sidebar-nav-icon cil-plus"></span> Ajouter Article
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('article.index') }}">
                <span class="c-sidebar-nav-icon cil-list"></span> Mes Articles
            </a>
        </li>
    </ul>
</li>


<li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle c-active" href="#">
        <i class="c-sidebar-nav-icon cil-task"></i> Categories
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('categorie.create') }}">
                <span class="c-sidebar-nav-icon cil-plus"></span> Ajouter Categorie
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('categorie.index') }}">
                <span class="c-sidebar-nav-icon cil-list"></span> Liste des Categories
            </a>
        </li>
    </ul>
</li>

<li class="c-sidebar-nav-item ">
    <a class="c-sidebar-nav-link" href="{{ route('produit.type', ['type' => \App\Models\Produit::TYPE_2]) }}">
        <i class="c-sidebar-nav-icon cil-pregnant"></i> Produits Pharmaceutique
    </a>
</li>

<li class="c-sidebar-nav-item ">
    <a class="c-sidebar-nav-link" href="{{ route('produit.type', ['type' => \App\Models\Produit::TYPE_1]) }}">
        <i class="c-sidebar-nav-icon cil-pregnant"></i> Produits Para-Pharmaceutique
    </a>
</li>

<li class="c-sidebar-nav-item ">
    <a class="c-sidebar-nav-link" href="{{ route('stats.index') }}">
        <i class="c-sidebar-nav-icon cil-star"></i> Statistique
    </a>
</li>


<li class="c-sidebar-nav-item ">
    <a class="c-sidebar-nav-link" href="{{ route('recommendation.index') }}">
        <i class="c-sidebar-nav-icon cil-list"></i> Recommendations
    </a>
</li>
