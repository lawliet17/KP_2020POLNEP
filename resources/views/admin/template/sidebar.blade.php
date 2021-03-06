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
    <li class="nav-item {{Request::is('home') ? 'active' : ''}}">
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
    <li class="nav-item {{Request::is('admin/posts') ? 'active' : ''}}">
      <a class="nav-link" href="{{route('posts.index')}}">
        <i class="far fa-clipboard"></i>
        <span>{{__('Post')}}</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{Request::is('admin/categories') ? 'active' : ''}}">
      <a class="nav-link" href="{{route('categories.index')}}">
        <i class="far fa-list-alt"></i>
        <span>{{__('Category')}}</span></a>
    </li>

    <li class="nav-item {{Request::is('admin/galleries') ? 'active' : ''}}">
      <a class="nav-link" href="{{route('galleries.index')}}">
        <i class="far fa-images"></i>
        <span>{{__('Gallery')}}</span></a>
    </li>

    <li class="nav-item {{Request::is('admin/choices') ? 'active' : ''}}">
      <a class="nav-link" href="{{route('choices.index')}}">
        <i class="far fa-list-alt"></i>
        <span>{{__('Choice')}}</span></a>
    </li>

    <li class="nav-item {{Request::is('admin/banners') ? 'active' : ''}}">
      <a class="nav-link" href="{{route('banners.index')}}">
        <i class="far fa-images"></i>
        <span>{{__('Banner')}}</span></a>
    </li>

    <li class="nav-item {{Request::is('admin/menu') ? 'active' : ''}}">
      <a class="nav-link" href="{{route('menu')}}">
        <i class="fas fa-bars"></i>
        <span>{{__('Menu')}}</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/languages')}}">
        <i class="fas fa-language"></i>
        <span>{{__('Language')}}</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>