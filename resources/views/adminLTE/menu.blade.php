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
            <a href="/dokumentasi" class="nav-link{{ request()->is('dokumentasi')? ' active':''}}">
             <i class="nav-icon fas fa-book"></i>
              <p>
                Dokumentasi
              </p>
            </a>
          </li>
         
		 
          <li class="nav-item has-treeview{{ request()->is('info')? ' menu-open':''}}">
            <a href="#" class="nav-link{{ request()->is('info')? ' active':''}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Kelola Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
           
              <li class="nav-item">
                <a href="/info" class="nav-link{{ request()->is('info')? ' active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Info</p>
                </a>
              </li>
             
            </ul>
          </li>
        </ul>
      </nav>