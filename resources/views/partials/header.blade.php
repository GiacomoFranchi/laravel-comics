<header>
    <div class="header">
        <div>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </div>
        <ul class="d-flex justify-content-center gap-3">
            @foreach($links as $link)
                <a href="{{$link}}">{{$link}}</a>
            @endforeach
        </ul>

    </div>
</header>