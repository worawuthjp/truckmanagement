<aside class="main-sidebar sidebar-dark-primary elevation-4 fixed-top">
    <!-- Brand Logo -->
    <a href="{{URL('/')}}" class="brand-link">
        <img src="bootstrap/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Truck Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="bootstrap/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <label class="d-block text-white">วรวุฒิ พันธุสิทธิ์เสรี</label>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-truck-moving nav-icon"></i>
                        <p>
                            Car
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{URL('/carinfo')}}" class="nav-link">
                                <i class="far fa-circle nav-icon nav-icon"></i>
                                <p>ข้อมูลรถ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>อะไหล่รถ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ประวัติ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-footer.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>สรุปค่าใช้จ่าย</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="fas fa-receipt nav-icon"></i>
                        <p>
                            ภาษี
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{URL('/process')}}" class="nav-link">
                        <i class="fas fa-check-circle nav-icon"></i>
                        <p>
                            Process
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-card nav-icon"></i>
                        <p>
                            ข้อมูลพนักงาน
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{URL('/employee')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ข้อมูลพนักงานทั้งหมด</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>รายงานสรุป</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-warehouse nav-icon"></i>
                        <p>
                            Stock inventory
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{URL('/gasoline')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>น้ำมัน</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{URL('/spare')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>อะไหล่</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
