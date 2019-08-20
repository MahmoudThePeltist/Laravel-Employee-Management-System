<?php
  $linkItems = collect([
    ['title'=>'Dashboard', 'icon'=>'fas fa-home', 'link'=>'/'],
    ['title'=>'Employees', 'icon'=>'fas fa-user', 'link'=>'/employees'],
    ['title'=>'Projects', 'icon'=>'fas fa-folder', 'link'=>'/projects'],
    ]);
?>

<nav class="col-md-2 px-0 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
    <ul class="nav flex-column">
        @foreach ( $linkItems as $linkItem )
        <li class="nav-item my-2 w-100 h-25 site-nav-item">
        <a class="nav-link" href="{{ $linkItem['link'] }}">
            <i class="{{ $linkItem['icon'] }}"></i>
            {{ $linkItem['title'] }}
        </a>
        </li>
        @endforeach
    </ul>
    </div>
</nav>
