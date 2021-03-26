 <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="{{route('dashboard.shop')}}">Shop</a></li>
            <li><a href="{{route('dashboard.pariwisata')}}">Pariwisata</a></li>
            <li><a href="{{route('dashboard.berita')}}">Berita</a></li>
            <li><a href="{{route('dashboard.contact')}}">Contact</a></li>
            <li class="has-children">
              <a href="">Profil</a>
              <ul class="dropdown">
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('vismis')}}">Visi Misi</a></li>
                <li class="has-children">
                  <a href="#">Struktur Organisasi</a>
                  <ul class="dropdown">
                    <li><a href="{{route('spotmar')}}">Spotmar Kasal</a></li>
                    <li><a href="{{route('dispotmar')}}">Dispotmar TNI Al</a></li>
                    <li><a href="{{route('koarmada1')}}">Koarmada I</a></li>
                    <li><a href="{{route('koarmada2')}}">Koarmada II</a></li>
                    <li><a href="{{route('koarmada3')}}">Koarmada III</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>