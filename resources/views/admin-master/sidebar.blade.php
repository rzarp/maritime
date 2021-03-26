<aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">Maritim</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">Mart</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
               <li><a class="nav-link" href="/admin/home"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
              </li>
            <li class="menu-header">Pages</li>             
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('create.user')}}">Input User</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('index.user')}}">Data User</a></li>
                </ul>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Product</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('product.lihat')}}">Lihat Product</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Pariwisata</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('pariwisata.lihat')}}">Lihat Pariwisata</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Contact</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.contact')}}">Lihat Contact</a></li>
                </ul>
              </li>
               <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Berita</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('berita.input')}}">Input Berita</a></li>
                </ul>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.berita')}}">Lihat Berita</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>About</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.about')}}">Input About</a></li>
                </ul>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.about')}}">Data About</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Visi & misi</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.vismis')}}">Input Visi & Misi</a></li>
                </ul>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.vismis')}}">Data Visi & Misi</a></li>
                </ul>
              </li>
              
              <li class="menu-header">Master Data</li> 
               <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Data Penduduk</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.penduduk')}}">Input Data Penduduk</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.penduduk')}}">Data Penduduk</a></li>
                </ul>

                <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Desa Binaan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.desa')}}">Input Desa Binaan</a></li>
                </ul>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.desa')}}">Data Desa Binaan</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data Puskesmas</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('input.desa')}}">Input Data Puskesmas</a></li>
                </ul>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="{{route('lihat.desa')}}">Data Puskesmas</a></li>
                </ul>
              </li>


              </li>

        </aside>