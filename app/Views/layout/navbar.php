<nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded-bottom">
    <div class="container">

        <!-- LOGO BRAND -->
        <a class="navbar-brand" href="/">
            <img src="/assets/img/brand-2.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Kontez
        </a>

        <!-- NAV MENU -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navList">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navList">
            <div class="col navbar-nav">
                <!-- <a class="nav-link" href="#">About</a>
                <a class="nav-link" href="#">Layanan</a>
                <a class="nav-link" href="#">Kontak</a> -->
            </div>

            <?=
                (session('email') == true) ?
                    '<div class="dropdown">
                        <button class="btn btn-secondary bg-transparent border-0 text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            Halo, <b>' . $user['nama'] . '</b> !
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <a class="dropdown-item" href="/edit">Edit Profile</a>
                            <a class="dropdown-item text-danger" href="/logout">Logout</a>
                        </div>
                    </div>' :
                    '<div class="btn-group">
                        <a href="/login" class="btn btn-light">Masuk</a>
                        <a href="" class="btn btn-primary">Daftar</a>
                    </div>';
            ?>
        </div>
    </div>
</nav>