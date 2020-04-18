<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark fixed-top" style="background-color: #003879">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{URL('/')}}" class="nav-link"><i class="fas fa-home">&nbsp;</i>Home</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" size="30" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append focus-select">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{URL('?')}}" class="nav-link"><i class="fas fa-cog nav-icon">&nbsp;</i>Setting</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{URL('?')}}" class="nav-link"><i class="fas fa-sign-out-alt nav-icon">&nbsp;</i>logout</a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
