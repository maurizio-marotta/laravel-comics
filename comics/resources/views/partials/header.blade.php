<header>
    <div class="root">
        <div class="logo">
            <img src="/img/dc-logo.png" alt="logo">
        </div>
        <nav>
            <ul class="lista">
                <li>
                    <a href="{{ route('characters') }}">CHARACTERS</a>
                </li>
                <li>
                    <a href="{{ route('comics') }}">comics</a>
                </li>
                <li>
                    <a href="{{ route('movies') }}">movies</a>
                </li>
                <li>
                    <a href="{{ route('tv') }}">tv</a>
                </li>
                <li>
                    <a href="{{ route('games') }}">games</a>
                </li>
                <li>
                    <a href="{{ route('collectibles') }}">collectibles</a>
                </li>
                <li>
                    <a href="{{ route('videos') }}">videos</a>
                </li>
                <li>
                    <a href="{{ route('fans') }}">fans</a>
                </li>
                <li>
                    <a href="{{ route('news') }}">news</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}">shop</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<style scoped>
    .root {
        background-color: #FFFFFF;
        display: flex;
        justify-content: center;
        align-items: center;
        justify-content: space-between;
        padding: 0px 150px;
        margin-top: 30px;
    }

    img {
        width: 50px;
    }

    .lista {
        display: flex;
    }

    li {
        list-style: none;
        margin: 10px;
    }

    li:hover {
        color: blue;
        cursor: pointer;
    }

    li:hover::after {
        content: '';
        width: 100%;
        display: block;
        height: 4px;
        background-color: blue;
    }
</style>
