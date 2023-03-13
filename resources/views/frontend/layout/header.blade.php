<header class="header header-5" style="background: rgba(255, 0, 0,.5)">
    <div class="header-middle sticky-header">
        <div class="container-fluid">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{ route('home') }}" class="logo" title="{{ config('app.name') }}">
                    <img src="assets/images/demos/demo-15/logo.png" alt="{{ config('app.name') }}" width="105" height="25">
                </a>

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li><a href="{{ route('home') }}" class="">Anasayfa</a></li>
                        <li><a href="{{  route('kurumsal', 'hakkimizda')}}" class="">Hakkımızda</a></li>
                        <li><a href="{{  route('kurumsal', 'uretim')}}" class="">Üretim</a></li>
                        <li><a href="{{  route('kurumsal', 'belgelerimiz')}}" class="">Belgelerimiz</a></li>
                        <li><a href="{{ route('home') }}" class="">Ürünlerimiz</a></li>
                        <li><a href="{{ route('iletisim') }}" class="">İletişim</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header-right">
                <div class="header-search header-search-extended header-search-visible">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Arama</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Arama ..." required>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>

                <a href="{{ route('home') }}" class="wishlist-link">
                    <i class="icon-heart-o"></i>
                </a>

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
