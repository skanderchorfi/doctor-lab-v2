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
        <i class="c-sidebar-nav-icon cil-task"></i> type de diabète
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('categorie.create') }}">
                <span class="c-sidebar-nav-icon cil-plus"></span> Ajouter un type de diabète
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('categorie.index') }}">
                <span class="c-sidebar-nav-icon cil-list"></span> Liste des types de diabète
            </a>
        </li>
    </ul>
</li>

<li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle c-active" href="#">
        <i class="c-sidebar-nav-icon cil-task"></i> Produits
    </a>
    <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('categorie.create') }}">
                <span class="c-sidebar-nav-icon cil-plus"></span> Produit pharmaceutique
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('categorie.index') }}">
                <span class="c-sidebar-nav-icon cil-list"></span> Produit Parapharmaceutique
            </a>
        </li>
    </ul>
</li>

<li class="c-sidebar-nav-item ">
    <a class="c-sidebar-nav-link" href="{{ route('recommendation.index') }}">
        <i class="c-sidebar-nav-icon cil-list"></i> Recommendations
    </a>
</li>
