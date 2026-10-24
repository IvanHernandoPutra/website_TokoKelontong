@extends('layouts.app')

@section('title', 'Toko Kelontongku — Export Snack Supplier Profile')
@section('meta_description', 'Business profile for logistics partner verification: Toko Kelontongku in Salatiga, Indonesia, supplying packaged snacks for Asian markets.')

@php
    $products = $featured->take(6);
    $heroProduct = $products->first();
    $images = [
        asset('images/hero-home.jpg'),
        asset('images/cat-snack.jpg'),
        asset('images/cat-makanan-instan.jpg'),
        asset('images/cat-kopi-teh.jpg'),
    ];
@endphp

@section('content')
<div class="page-shell">
    <div class="preloader" data-preloader><div class="preloader-logo"><img class="brand-logo" src="{{ asset('images/logo-mark.png') }}" alt="Toko Kelontongku logo"/><span>TOKO KELONTONGKU</span></div><span class="preloader-count" data-counter>0</span></div>

    <section class="hero-section">
        <div class="hero-blob" data-blob></div>
        <div class="hero-badge-wrap">
            <span class="eyebrow hero-reveal">Export-ready food supplier profile</span>
        </div>
        <div class="hero-copy">
            <h1 class="hero-title" data-split>Toko<br><em>Kelontongku</em></h1>
            <p class="hero-description hero-reveal">We are a Salatiga-based business supplying packaged snacks and food products, prepared for logistics collaboration to Japan, China, and other Asian destinations.</p>
            <div class="search-block hero-reveal">
                <label for="product-search">Review our active catalog items</label>
                <form class="search-pill" action="{{ route('products') }}" method="GET">
                    <span class="material-symbols-outlined">search</span><input id="product-search" name="cari" placeholder="Search by product name" aria-label="Search products"/><button class="button button-dark magnetic" type="submit">Open Catalog</button>
                </form>
            </div>
            <div class="proof-grid hero-reveal">
                <article>
                    <h3>Business base</h3>
                    <p>Salatiga, Indonesia</p>
                </article>
                <article>
                    <h3>Evidence available</h3>
                    <p>Warehouse photos and real product photos</p>
                </article>
                <article>
                    <h3>Primary objective</h3>
                    <p>Logistics vendor partnership for export shipments</p>
                </article>
            </div>
        </div>
        <div class="hero-art">
            <div class="hero-sun"></div>
            <div class="hero-image-wrap" data-hero-bag><img src="{{ asset('images/box.png') }}" alt="Export packaging box"/></div>
            <div class="chip-card float-card" data-chip-card><span class="chip-icon">✦</span><div><strong>Packaging-focused</strong><small>Prepared for cross-border handling</small></div></div>
            <div class="promo-card hero-reveal"><img src="{{ $images[1] }}" alt="Packaged snack sample"/><div><small>Sample trade item</small><strong>Packaged snack line</strong><span><b data-price="26.5">$0.00</b> <del>reference only</del></span></div><span class="promo-arrow material-symbols-outlined">arrow_outward</span></div>
        </div>
    </section>

    <section class="products-section section-pad" id="shop">
        <div class="section-heading reveal-title"><div><span class="eyebrow"><i></i> Current product lineup</span><h2>Export-focused packaged<br><em>snack catalog.</em></h2></div><div class="slider-controls"><button class="circle-button magnetic" data-slider-prev aria-label="Previous products"><span class="material-symbols-outlined">arrow_back</span></button><button class="circle-button circle-button-accent magnetic" data-slider-next aria-label="Next products"><span class="material-symbols-outlined">arrow_forward</span></button></div></div>
        <div class="product-slider" data-product-slider>
            @forelse($products as $index => $product)
                <article class="product-card reveal-card" data-product-card>
                    <div class="product-image"><img loading="lazy" src="{{ $product->image ?: $images[$index % count($images)] }}" alt="{{ $product->name }}"/><span class="product-badge"><i></i>{{ $product->badge ?: 'Best seller' }}</span><button class="heart-button" type="button" aria-label="Add {{ $product->name }} to wishlist"><span class="material-symbols-outlined">favorite</span></button></div>
                    <div class="product-meta"><div><h3>{{ $product->name }}</h3><span>{{ $product->category?->name ?: 'Ocean Snack' }}</span></div><strong>Rp {{ number_format($product->price_idr, 0, ',', '.') }}</strong></div>
                    <button class="button shop-button magnetic" type="button" data-add-cart data-image="{{ $product->image ?: $images[$index % count($images)] }}">Request Quote <span class="material-symbols-outlined">shopping_bag</span></button>
                </article>
            @empty
                <div class="empty-state">Product catalog is being updated.</div>
            @endforelse
        </div>
    </section>

    <section class="promo-section" data-promo>
        <div class="promo-bg"></div><div class="promo-word" aria-hidden="true"><span>S</span><span>N</span><span>A</span><span>C</span><span>K</span></div>
        <div class="promo-content"><span class="eyebrow eyebrow-light"><i></i> Partner logistics objective</span><h2>Reliable export<br><em>shipments.</em></h2><p>“This website is prepared to support logistics partner due diligence for real snack and food distribution activity.”</p></div>
        <div class="promo-bag" data-promo-bag><img src="{{ $heroProduct?->image ?: $images[2] }}" alt="Atlantis Waves snack bag"/><span class="deal-badge">LIMITED<br><b>30% OFF</b><small data-countdown>00:00:00</small></span></div>
        <div class="promo-ribbon"><div>SALATIGA · INDONESIA &nbsp; · &nbsp; JAPAN · CHINA · ASIA TARGET MARKETS &nbsp; · &nbsp; PACKAGED SNACK SUPPLIER &nbsp; · &nbsp;</div></div>
    </section>

    <section class="fresh-section section-pad">
        <div class="section-heading reveal-title"><div><span class="eyebrow"><i></i> Readiness proof</span><h2>Operational support<br><em>for logistics.</em></h2></div><a class="text-link" href="{{ route('shipping') }}">Review shipping page <span class="material-symbols-outlined">arrow_outward</span></a></div>
        <div class="fresh-track" data-fresh-track>
            @foreach(array_slice($images, 0, 4) as $index => $image)
                <a class="fresh-card" href="{{ route('products') }}"><img loading="lazy" src="{{ $image }}" alt="Toko Kelontongku product and operations evidence {{ $index + 1 }}"/><div class="fresh-overlay"><span>{{ ['Packaged inventory', 'Product variety', 'Ready-to-ship stock', 'Operational continuity'][$index] }}</span><strong>{{ ['Warehouse photo set', 'Product photo set', 'Shipment-ready packaging', 'Catalog maintenance'][$index] }}</strong></div><span class="fresh-icon material-symbols-outlined">shopping_bag</span></a>
            @endforeach
        </div>
    </section>
</div>
<div class="toast" data-toast><span class="material-symbols-outlined">check_circle</span> Quote request noted for logistics follow-up</div>
@endsection
