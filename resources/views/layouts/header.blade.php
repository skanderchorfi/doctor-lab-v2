<button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
        data-class="c-sidebar-show">
    <i class="c-icon c-icon-lg cil-menu"></i>
</button>
<a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
    <img src="https://images.creativemarket.com/0.1.0/ps/3236114/580/386/m1/fpnw/wm0/preview02-.jpg?1505158726&s=bfde597f8af0c287996881d64e2a5366" width="118" alt="Brand Logo">
</a>
<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true">
    <i class="c-icon c-icon-lg cil-menu"></i>
</button>
<ul class="c-header-nav mfs-auto">
</ul>
<ul class="c-header-nav">
    <li class="c-header-nav-item dropdown">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button"
           aria-haspopup="true" aria-expanded="false">
            <i class="nav-icon cil-bell"></i> <span class="badge badge-danger">{{ auth()->user()->unreadNotifications->count() }}</span>
        </a>
        @if(auth()->user()->unreadNotifications->count() !== 0)
            <div class="dropdown-menu dropdown-menu-right pt-0">
                @foreach(auth()->user()->unreadNotifications as $notification)
                    <a class="dropdown-item" href="{{ route('home', ['notification' => $notification->id]) }}">
                        {{ $notification->data['message'] }}
                    </a>
                @endforeach
            </div>
        @endif
    </li>

    <li class="c-header-nav-item dropdown">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button"
           aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar">
                <img class="c-avatar-img" src="https://infyom.com/images/logo/blue_logo_150x150.png" alt="">
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
            <a class="dropdown-item" href="#">
                <i class="c-icon mfe-2 cil-user"></i>Profile
            </a>
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="c-icon mfe-2 cil-account-logout"></i>Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>
