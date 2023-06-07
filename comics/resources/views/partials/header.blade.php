<header>
    <div class="root">
        <div class="logo">
            <img src="/img/dc-logo.png" alt="logo">
        </div>
        <nav>
            <ul>
                <li>charaters</li>
                <li>comics</li>
                <li>movies</li>
                <li>tv</li>
                <li>games</li>
                <li>collectibles</li>
                <li>videos</li>
                <li>fans</li>
                <li>news</li>
                <li>shop</li>
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

    ul {
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
