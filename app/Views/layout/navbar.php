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

            <!-- LOGIN DROPDOWN -->
            <div class="btn-group">
                <button type="button" class="btn btn-secondary rounded" data-toggle="dropdown" data-display="static">
                    Sign In
                </button>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg-right">
                    <form class="px-4 py-3">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">New around here? Sign up</a>
                    <a class="dropdown-item" href="#">Forgot password?</a>
                </div>
            </div>
        </div>
    </div>
</nav>