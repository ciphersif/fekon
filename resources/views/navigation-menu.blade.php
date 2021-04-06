<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
	  
    </ul>
	
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
         <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                  <i class="fas fa-sign-out-alt"></i>  {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
      </li>
    </ul>
  </nav>
  
  
  <!--------------------------------------------------------------------------------------------------------------------------------------------- >
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">FEKON</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
		@auth
                      <div class="image">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
								
                                <img class="img-circle elevation-2"  width="18" height="18"  src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
							
								 
                            @else
								<div class="image">
                                {{ Auth::user()->name }}
                                <svg class="img-circle elevation-2"  width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
								</div>
                            @endif
						</div>
								<div class="info">
								  <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
								</div>
        @endauth
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="/" class="nav-link{{ request()->is('/')? ' active':''}}">
             <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
         
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="/user/profile" class="nav-link{{ request()->is('dokumentasi')? ' active':''}}">
             <i class="nav-icon fas fa-book"></i>
              <p>
                Account
              </p>
            </a>
          </li>
         
		 
          <li class="nav-item has-treeview {{ request()->is('info') || request()->is('example') ? 'menu-open':''}}">
            <a href="#" class="nav-link {{ request()->is('info') || request()->is('example') ?  'active':''}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Kelola Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
           
              <li class="nav-item">
                <a href="/info" class="nav-link {{ request()->is('info')? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Info</p>
                </a>
                <a href="/example" class="nav-link{{ request()->is('example')? ' active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Example</p>
                </a>
              </li>
             
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>