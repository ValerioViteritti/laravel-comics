<header>
    <nav>
        <div class="container">
            <div class="row">
                <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <img src="/img/dc-logo.png" alt="Logo DC Comics">
                </a>

                <div id="linkNav">
                    <ul>
                        <li>
                            <a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}"
                                href="{{ route('characters') }}">Character</a>
                            <a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                                href="{{ route('comics') }}">Comics</a>
                            <a href="#">Movies</a>
                            <a href="#">Tv</a>
                            <a href="#">Games</a>
                            <a href="#">Coleectibles</a>
                            <a href="#">Videos</a>
                            <a href="#">Fans</a>
                            <a href="#">News</a>
                            <a href="#">Shop</a>
                        </li>
                    </ul>
                    {{-- <div v-for="(links, index) in links" :key="index">
                        <a href="#">
                            {{ links . text }}
                        </a>
                    </div> --}}


                </div>

            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="current">CURRENT SERIES</div>
    </div>

</header>
