<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu" style='background-color:#01390a'>
    <!-- LOGO -->
    <div class="navbar-brand-box" style='background-color:#01390a'>
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
                    <a class="nav-link menu-link" href="index" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>dashboard</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span>Clients</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">View Individuals</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">View Companies</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">View Employees</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- end Menu -->


                <li class="menu-title"><i class="ri-more-fill"></i> <span>Fuel Management</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span>Service Station</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link">View All</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat" class="nav-link">Stock Codes Upload</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="index" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span>View Attendants</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Cards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="landing" class="nav-link" data-key="t-one-page">View All</a>
                            </li>
                            <li class="nav-item">
                                <a href="nft-landing" class="nav-link" data-key="t-nft-landing">Add New Card<span class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="landing" class="nav-link" data-key="t-one-page">Pending Transfer</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Funds</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span>Funds transfer</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="ui-alerts" class="nav-link">Individual Topup</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-badges" class="nav-link">Bulk Topup</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-buttons" class="nav-link">Company Topup</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-buttons" class="nav-link">Pending Topup</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>reports & products</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ri-stack-line"></i> <span>Reports</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts" class="nav-link">View All</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable" class="nav-link">Service Stations Transaction Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar" class="nav-link">ERP Transaction Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-animation" class="nav-link">Employees Consumption Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-tour" class="nav-link">Mileage Report</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span>Products</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="forms-elements" class="nav-link">View All</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select" class="nav-link"> Approve Product</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span>settings</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ri-layout-grid-line"></i> <span>Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic" class="nav-link">Add New Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs" class="nav-link">View Settings</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="ri-pie-chart-line"></i> <span><?php echo app('translator')->get('translation.charts'); ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts"><?php echo app('translator')->get('translation.apexcharts'); ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="charts-apex-line" class="nav-link"><?php echo app('translator')->get('translation.line'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-area" class="nav-link"><?php echo app('translator')->get('translation.area'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-column" class="nav-link"><?php echo app('translator')->get('translation.column'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bar" class="nav-link"><?php echo app('translator')->get('translation.bar'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-mixed" class="nav-link"><?php echo app('translator')->get('translation.mixed'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-timeline" class="nav-link"><?php echo app('translator')->get('translation.timeline'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-candlestick" class="nav-link"><?php echo app('translator')->get('translation.candlstick'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-boxplot" class="nav-link"><?php echo app('translator')->get('translation.boxplot'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bubble" class="nav-link"><?php echo app('translator')->get('translation.bubble'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-scatter" class="nav-link"><?php echo app('translator')->get('translation.scatter'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-heatmap" class="nav-link"><?php echo app('translator')->get('translation.heatmap'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-treemap" class="nav-link"><?php echo app('translator')->get('translation.treemap'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-pie" class="nav-link"><?php echo app('translator')->get('translation.pie'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radialbar" class="nav-link"><?php echo app('translator')->get('translation.radialbar'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radar" class="nav-link"><?php echo app('translator')->get('translation.radar'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-polar" class="nav-link"><?php echo app('translator')->get('translation.polar-area'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="charts-chartjs" class="nav-link"><?php echo app('translator')->get('translation.chartjs'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-echarts" class="nav-link"><?php echo app('translator')->get('translation.echarts'); ?></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ri-compasses-2-line"></i> <span><?php echo app('translator')->get('translation.icons'); ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="icons-remix" class="nav-link"><?php echo app('translator')->get('translation.remix'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-boxicons" class="nav-link"><?php echo app('translator')->get('translation.boxicons'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-materialdesign" class="nav-link"><?php echo app('translator')->get('translation.material-design'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-lineawesome" class="nav-link"><?php echo app('translator')->get('translation.line-awesome'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-feather" class="nav-link"><?php echo app('translator')->get('translation.feather'); ?></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ri-map-pin-line"></i> <span><?php echo app('translator')->get('translation.maps'); ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google" class="nav-link" data-key="t-google">
                                    Google
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector" class="nav-link" data-key="t-vector">
                                    Vector
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet" class="nav-link" data-key="t-leaflet">
                                    Leaflet
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ri-share-line"></i> <span><?php echo app('translator')->get('translation.multi-level'); ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><?php echo app('translator')->get('translation.level-1.1'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount"><?php echo app('translator')->get('translation.level-1.2'); ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link"><?php echo app('translator')->get('translation.level-2.1'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm"><?php echo app('translator')->get('translation.level-2.2'); ?>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link"><?php echo app('translator')->get('translation.level-3.1'); ?></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link"><?php echo app('translator')->get('translation.level-3.2'); ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
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
<div class="vertical-overlay"></div><?php /**PATH /home/vinscent/Documents/poscloud/themeforest-gERV9z9D-velzon-aspnet-core-admin-dashboard-template/Velzon_v1.9.0/Laravel (1)/card-admin-v2/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>