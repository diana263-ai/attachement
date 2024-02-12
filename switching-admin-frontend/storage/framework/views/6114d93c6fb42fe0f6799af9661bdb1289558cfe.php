<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/dgt/logo.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/dgt/logo.png')); ?>" alt="" height="35">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
              <img src="<?php echo e(URL::asset('assets/images/dgt/logo.png')); ?>" alt="" height="160">
            </span>
            <span class="logo-lg">
                     <img src="<?php echo e(URL::asset('assets/images/dgt/logo.png')); ?>" alt="" height="180">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
<br>
    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>dashboard</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


               


                <li class="menu-title"><i class="ri-more-fill"></i> <span>MAIN MENU</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class=" ri-gas-station-line"></i> <span>Merchants</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('merchants.create')); ?>" class="nav-link">Create</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('merchants.index')); ?>" class="nav-link">View</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-bank-card-2-line"></i> <span data-key="t-landing">Devices</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('device.index')); ?>" class="nav-link" data-key="t-one-page">View</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Transactions</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-exchange-dollar-line"></i> <span>Pos Transactions</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('transactions.show')); ?>" class="nav-link">View All</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span>USER MANAGEMENT</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ri-settings-5-line"></i> <span>Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('roles.index')); ?>" class="nav-link">Roles</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('permissions.index')); ?>" class="nav-link">Permissions</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('users.index')); ?>" class="nav-link">Users</a>
                            </li>
                        </ul>
                    </div>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH C:\Users\diana\OneDrive\Desktop\Laravel\Internship Project\switching-admin-frontend\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>