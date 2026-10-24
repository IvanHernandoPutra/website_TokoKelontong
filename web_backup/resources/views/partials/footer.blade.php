<footer class="site-footer">
    <div>
        <a class="brand" href="{{ route('home') }}">
            <img class="brand-logo" src="{{ asset('images/logo-mark.png') }}" alt="Toko Kelontongku logo"/>
            <span>TOKO KELONTONGKU</span>
        </a>
        <p>Business profile prepared for logistics vendor evaluation and export shipment partnership.</p>
    </div>
    <form class="newsletter" onsubmit="return false">
        <label for="newsletter-email">Request logistics and shipment coordination</label>
        <div><input id="newsletter-email" type="email" placeholder="Business email address" aria-label="Business email address"/><button class="button button-dark magnetic" type="submit">Contact Team <span class="material-symbols-outlined">arrow_forward</span></button></div>
    </form>
    <small>© {{ date('Y') }} Toko Kelontongku · Salatiga, Indonesia</small>
</footer>
