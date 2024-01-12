<header>
    <div class="header">
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </div>
        <ul class="d-flex justify-content-center gap-3">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('comic') }}">Prodotti</a>
            </li>
            <li>
                <a href="{{ route('shop') }}">Notizie</a>
            </li>
        </ul>

    </div>
</header>