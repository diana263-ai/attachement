<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/zuva/whitezuvacopy.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/zuva/whitezuvacopy.png')); ?>" alt="" height="35">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/zuva/whitezuvacopy.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/zuva/whitezuvacopy.png')); ?>" alt="" height="35">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

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


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class=" ri-group-line"></i> <span>Clients</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/clients/individuals" class="nav-link">View Individuals</a>
                            </li>
                            <li class="nav-item">
                                <a href="/clients/companies" class="nav-link">View Companies</a>
                            </li>
                            <li class="nav-item">
                                <a href="/clients/employees" class="nav-link">View Employees</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- end Menu -->


                <li class="menu-title"><i class="ri-more-fill"></i> <span>Fuel Management</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class=" ri-gas-station-line"></i> <span>Service Station</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/service-stations/view-all" class="nav-link">View All</a>
                            </li>
                            <li class="nav-item">
                                <a href="/service-stations/stock-codes-upload" class="nav-link">Stock Codes Upload</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/attendants" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class=" ri-user-settings-line"></i> <span>View Attendants</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-bank-card-2-line"></i> <span data-key="t-landing">Cards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/cards/view-all" class="nav-link" data-key="t-one-page">View All</a>
                            </li>
                            <li class="nav-item">
                                <a href="/cards/add-new-card" class="nav-link" data-key="t-nft-landing">Add New Card<span class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="/cards/pending-transfer" class="nav-link" data-key="t-one-page">Pending Transfer</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Funds</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-exchange-dollar-line"></i> <span>Funds transfer</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/funds-transfer/individual-topup" class="nav-link">Individual Topup</a>
                            </li>
                            <li class="nav-item">
                                <a href="/funds-transfer/bulk-topup" class="nav-link">Bulk Topup</a>
                            </li>
                            <li class="nav-item">
                                <a href="/funds-transfer/company-topup" class="nav-link">Company Topup</a>
                            </li>
                            <li class="nav-item">
                                <a href="/funds-transfer/pending-topup" class="nav-link">Pending Topup</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>activities</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ri-bar-chart-grouped-line"></i> <span>Reports</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/reports/view-all" class="nav-link">View All</a>
                            </li>
                            <li class="nav-item">
                                <a href="/reports/service-stations-transaction-report" class="nav-link">Service Stations Transaction Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="/reports/erp-transaction-report" class="nav-link">ERP Transaction Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="/reports/employees-consumption-report" class="nav-link">Employees Consumption Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="/reports/mileage-report" class="nav-link">Mileage Report</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-apps-line"></i> <span>Products</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/products/view-all" class="nav-link">View All</a>
                            </li>
                            <li class="nav-item">
                                <a href="/products/approve-product" class="nav-link"> Approve Product</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>settings</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ri-settings-5-line"></i> <span>Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/settings/view-settings" class="nav-link">View Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="/settings/add-new-settings" class="nav-link">Add New Settings</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- TAMPLATES -->
                <li class="menu-title"><i class="ri-more-fill"></i> <span>tamplates</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTamplates" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTamplates">
                        <i class="ri-menu-2-line"></i> <span>tamplates</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTamplates">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/tamplates/tables" class="nav-link">tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="/tamplates/forms" class="nav-link">Forms</a>
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
<div class="vertical-overlay"></div><?php /**PATH C:\Users\Dell\Desktop\php_laravel\card-admin-v2\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>