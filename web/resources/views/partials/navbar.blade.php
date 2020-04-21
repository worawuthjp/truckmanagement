<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure?
            </div>
            <div class="modal-footer">
               <a href="{{URL('/login')}}"> <button type="button" class="btn btn-primary"  >Yes</button></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark fixed-top" style="background-color: #003879">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{URL('/')}}" class="nav-link"><i class="fas fa-home nav-icon"></i>Home</a>
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
        <li class="nav-item d-none d-sm-inline-block" >
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{URL('?')}}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
                <i class="fas fa-cog nav-icon" ></i> Setting
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{URL('/account_setting')}}">ตั้งค่าบัญชี</a>
                <a class="dropdown-item" href="{{URL('/security')}}">ความปลอดภัย</a>
                <a class="dropdown-item" href="{{URL('/info')}}">เกี่ยวกับ</a>
                <a class="dropdown-item" href="4">คู่มือการใช้งาน</a>
            </div>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a  data-toggle="modal" data-target="#exampleModal" class="nav-link "  ><i class="fas fa-sign-out-alt nav-icon" ></i>Logout</a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

