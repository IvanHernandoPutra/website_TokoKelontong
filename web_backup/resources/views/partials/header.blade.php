<header class="site-header" data-header>
    <a class="brand" href="{{ route('home') }}" aria-label="Toko Kelontongku home">
        <img class="brand-logo" src="{{ asset('images/logo-mark.png') }}" alt="Toko Kelontongku logo"/>
        <span>TOKO KELONTONGKU</span>
    </a>
    <nav class="nav-tabs" aria-label="Main navigation">
        <a class="nav-tab {{ request()->routeIs('products', 'product.detail') ? 'is-active' : '' }}" href="{{ route('products') }}">Product Catalog</a>
        <a class="nav-tab {{ request()->routeIs('about') ? 'is-active' : '' }}" href="{{ route('about') }}">Business Profile</a>
        <a class="nav-tab {{ request()->routeIs('shipping') ? 'is-active' : '' }}" href="{{ route('shipping') }}">Shipping Readiness</a>
        <a class="nav-tab {{ request()->routeIs('contact') ? 'is-active' : '' }}" href="{{ route('contact') }}">Contact</a>
    </nav>
    <div class="nav-actions">
        <button class="theme-toggle" type="button" data-theme-toggle aria-label="Toggle dark mode"><span class="material-symbols-outlined">dark_mode</span></button>
        <a class="icon-link hide-mobile" href="{{ route('stores') }}" aria-label="Business location"><span class="material-symbols-outlined">location_on</span></a>
        <a class="cart-link" href="{{ route('contact') }}" data-cart-link><span class="material-symbols-outlined">local_shipping</span><span class="cart-label"><span class="cart-label-text">LOGISTICS </span>(<b data-cart-count>1</b>)</span></a>
        <button class="menu-toggle" type="button" data-menu-toggle aria-label="Open menu" aria-expanded="false"><span class="material-symbols-outlined">menu</span></button>
    </div>
</header>
