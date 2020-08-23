<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">{{__('Admin')}}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>{{__('Dashboard')}}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      {{__('Interface')}}
    </div>    

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('posts.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{__('Post')}}</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('categories.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{__('Category')}}</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('galleries.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{__('Gallery')}}</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('choices.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{__('Choice')}}</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('banners.index')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{__('Banner')}}</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('menu')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>{{__('Menu')}}</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>