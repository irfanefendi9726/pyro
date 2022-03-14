<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyPapanTanda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
               <a class="navbar-brand" href="/">MyPapanTanda</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/about">About</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/pricing">Pricing</a>
                        </li>                         
                   

                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-md-0">

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/register">Register</a>
                        </li>                        
             

                  </ul>                             
              </div>
            </div>
          </nav>
                  

        <div class="container" style="min-height: 75rem;padding-top: 4.5rem;">
            @yield('content') 
        </div>  
        
        <aside class="app-aside app-aside-expand-md app-aside-light">
            <!-- .aside-content -->
            <div class="aside-content">
              <!-- .aside-header -->
              <header class="aside-header d-block d-md-none">
                <!-- .btn-account -->
                <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
                <!-- .dropdown-aside -->
                <div id="dropdown-aside" class="dropdown-aside collapse">
                  <!-- dropdown-items -->
                  <div class="pb-3">
                    <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
                  </div><!-- /dropdown-items -->
                </div><!-- /.dropdown-aside -->
              </header><!-- /.aside-header -->
              <!-- .aside-menu -->
              <div class="aside-menu overflow-hidden ps">
                <!-- .stacked-menu -->
                <nav id="stacked-menu" class="stacked-menu stacked-menu-has-collapsible">
                  <!-- .menu -->
                  <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item has-active">
                      <a href="index.html" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">App Pages</span> <span class="badge badge-warning">New</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">App Pages</li>
                        <li class="menu-item">
                          <a href="page-clients.html" class="menu-link" tabindex="-1">Clients</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-teams.html" class="menu-link" tabindex="-1">Teams</a>
                        </li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link" tabindex="-1">Team</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="page-team.html" class="menu-link" tabindex="-1">Overview</a>
                            </li>
                            <li class="menu-item">
                              <a href="page-team-feeds.html" class="menu-link" tabindex="-1">Feeds</a>
                            </li>
                            <li class="menu-item">
                              <a href="page-team-projects.html" class="menu-link" tabindex="-1">Projects</a>
                            </li>
                            <li class="menu-item">
                              <a href="page-team-members.html" class="menu-link" tabindex="-1">Members</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link" tabindex="-1">Project</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="page-project.html" class="menu-link" tabindex="-1">Overview</a>
                            </li>
                            <li class="menu-item">
                              <a href="page-project-board.html" class="menu-link" tabindex="-1">Board</a>
                            </li>
                            <li class="menu-item">
                              <a href="page-project-gantt.html" class="menu-link" tabindex="-1">Gantt View</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item">
                          <a href="page-calendar.html" class="menu-link" tabindex="-1">Calendar</a>
                        </li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link" tabindex="-1">Invoices</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="page-invoices.html" class="menu-link" tabindex="-1">List</a>
                            </li>
                            <li class="menu-item">
                              <a href="page-invoice.html" class="menu-link" tabindex="-1">Details</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item">
                          <a href="page-messages.html" class="menu-link" tabindex="-1">Messages</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-conversations.html" class="menu-link" tabindex="-1">Conversations</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Auth</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">Auth</li>
                        <li class="menu-item">
                          <a href="auth-comingsoon-v1.html" class="menu-link" tabindex="-1">Coming Soon v1</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-comingsoon-v2.html" class="menu-link" tabindex="-1">Coming Soon v2</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-cookie-consent.html" class="menu-link" tabindex="-1">Cookie Consent</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-empty-state.html" class="menu-link" tabindex="-1">Empty State</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-error-v1.html" class="menu-link" tabindex="-1">Error Page v1</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-error-v2.html" class="menu-link" tabindex="-1">Error Page v2</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-error-v3.html" class="menu-link" tabindex="-1">Error Page v3</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-maintenance.html" class="menu-link" tabindex="-1">Maintenance</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-page-message.html" class="menu-link" tabindex="-1">Page Message</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-session-timeout.html" class="menu-link" tabindex="-1">Session Timeout</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-signin-v1.html" class="menu-link" tabindex="-1">Sign In v1</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-signin-v2.html" class="menu-link" tabindex="-1">Sign In v2</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-signup.html" class="menu-link" tabindex="-1">Sign Up</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-recovery-username.html" class="menu-link" tabindex="-1">Recovery Username</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-recovery-password.html" class="menu-link" tabindex="-1">Recovery Password</a>
                        </li>
                        <li class="menu-item">
                          <a href="auth-lockscreen.html" class="menu-link" tabindex="-1">Screen Locked</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">User</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">User</li>
                        <li class="menu-item">
                          <a href="user-profile.html" class="menu-link" tabindex="-1">Profile</a>
                        </li>
                        <li class="menu-item">
                          <a href="user-activities.html" class="menu-link" tabindex="-1">Activities</a>
                        </li>
                        <li class="menu-item">
                          <a href="user-teams.html" class="menu-link" tabindex="-1">Teams</a>
                        </li>
                        <li class="menu-item">
                          <a href="user-projects.html" class="menu-link" tabindex="-1">Projects</a>
                        </li>
                        <li class="menu-item">
                          <a href="user-tasks.html" class="menu-link" tabindex="-1">Tasks</a>
                        </li>
                        <li class="menu-item">
                          <a href="user-profile-settings.html" class="menu-link" tabindex="-1">Profile Settings</a>
                        </li>
                        <li class="menu-item">
                          <a href="user-account-settings.html" class="menu-link" tabindex="-1">Account Settings</a>
                        </li>
                        <li class="menu-item">
                          <a href="user-billing-settings.html" class="menu-link" tabindex="-1">Billing Settings</a>
                        </li>
                        <li class="menu-item">
                          <a href="user-notification-settings.html" class="menu-link" tabindex="-1">Notification Settings</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Layouts</span> <span class="badge badge-subtle badge-success">+4</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">Layouts</li>
                        <li class="menu-item">
                          <a href="layout-blank.html" class="menu-link" tabindex="-1">Blank Page</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-nosearch.html" class="menu-link" tabindex="-1">Header no Search</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-horizontal-menu.html" class="menu-link" tabindex="-1">Horizontal Menu</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-fullwidth.html" class="menu-link" tabindex="-1">Full Width</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-pagenavs.html" class="menu-link" tabindex="-1">Page Navs</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-pagecover.html" class="menu-link" tabindex="-1">Page Cover</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-pagecover-img.html" class="menu-link" tabindex="-1">Cover Image</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-pagesidebar.html" class="menu-link" tabindex="-1">Page Sidebar</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-pagesidebar-fluid.html" class="menu-link" tabindex="-1">Sidebar Fluid</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-pagesidebar-hidden.html" class="menu-link" tabindex="-1">Sidebar Hidden</a>
                        </li>
                        <li class="menu-item">
                          <a href="layout-custom.html" class="menu-link" tabindex="-1">Custom</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item">
                      <a href="landing-page.html" class="menu-link"><span class="menu-icon fas fa-rocket"></span> <span class="menu-text">Landing Page</span></a>
                    </li><!-- /.menu-item -->
                    <!-- .menu-header -->
                    <li class="menu-header">Interfaces </li><!-- /.menu-header -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Components</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">Components</li>
                        <li class="menu-item">
                          <a href="component-general.html" class="menu-link" tabindex="-1">General</a>
                        </li>
                        <li class="menu-item">
                          <a href="component-icons.html" class="menu-link" tabindex="-1">Icons</a>
                        </li>
                        <li class="menu-item">
                          <a href="component-rich-media.html" class="menu-link" tabindex="-1">Rich Media</a>
                        </li>
                        <li class="menu-item">
                          <a href="component-list-views.html" class="menu-link" tabindex="-1">List Views</a>
                        </li>
                        <li class="menu-item">
                          <a href="component-sortable-nestable.html" class="menu-link" tabindex="-1">Sortable &amp; Nestable</a>
                        </li>
                        <li class="menu-item">
                          <a href="component-activity.html" class="menu-link" tabindex="-1">Activity</a>
                        </li>
                        <li class="menu-item">
                          <a href="component-steps.html" class="menu-link" tabindex="-1">Steps</a>
                        </li>
                        <li class="menu-item">
                          <a href="component-tasks.html" class="menu-link" tabindex="-1">Tasks</a>
                        </li>
                        <li class="menu-item">
                          <a href="component-metrics.html" class="menu-link" tabindex="-1">Metrics</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon oi oi-pencil"></span> <span class="menu-text">Forms</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">Forms</li>
                        <li class="menu-item">
                          <a href="form-basic.html" class="menu-link" tabindex="-1">Basic Elements</a>
                        </li>
                        <li class="menu-item">
                          <a href="form-autocompletes.html" class="menu-link" tabindex="-1">Autocompletes</a>
                        </li>
                        <li class="menu-item">
                          <a href="form-pickers.html" class="menu-link" tabindex="-1">Pickers</a>
                        </li>
                        <li class="menu-item">
                          <a href="form-editors.html" class="menu-link" tabindex="-1">Editors</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span> <span class="menu-text">Tables</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">Tables</li>
                        <li class="menu-item">
                          <a href="table-basic.html" class="menu-link" tabindex="-1">Basic Table</a>
                        </li>
                        <li class="menu-item">
                          <a href="table-datatables.html" class="menu-link" tabindex="-1">Datatables</a>
                        </li>
                        <li class="menu-item">
                          <a href="table-responsive-datatables.html" class="menu-link" tabindex="-1">Responsive Datatables</a>
                        </li>
                        <li class="menu-item">
                          <a href="table-filters-datatables.html" class="menu-link" tabindex="-1">Filter Columns</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span> <span class="menu-text">Collections</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">Collections</li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link" tabindex="-1">Chart.js</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="collection-chartjs-line.html" class="menu-link" tabindex="-1">Line</a>
                            </li>
                            <li class="menu-item">
                              <a href="collection-chartjs-bar.html" class="menu-link" tabindex="-1">Bar</a>
                            </li>
                            <li class="menu-item">
                              <a href="collection-chartjs-radar-scatter.html" class="menu-link" tabindex="-1">Radar &amp; Scatter</a>
                            </li>
                            <li class="menu-item">
                              <a href="collection-chartjs-others.html" class="menu-link" tabindex="-1">Others</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item">
                          <a href="collection-flot-charts.html" class="menu-link" tabindex="-1">Flot</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-inline-charts.html" class="menu-link" tabindex="-1">Inline Charts</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-jqvmap.html" class="menu-link" tabindex="-1">Vector Map</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span> <span class="menu-text">Level Menu</span></a> <!-- child menu -->
                      <ul class="menu"><li class="menu-subhead">Level Menu</li>
                        <li class="menu-item">
                          <a href="#" class="menu-link" tabindex="-1">Menu Item</a>
                        </li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link" tabindex="-1">Menu Item</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="#" class="menu-link" tabindex="-1">Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link" tabindex="-1">Child Item</a>
                            </li>
                            <li class="menu-item has-child">
                              <a href="#" class="menu-link" tabindex="-1">Child Item</a> <!-- grand child menu -->
                              <ul class="menu">
                                <li class="menu-item">
                                  <a href="#" class="menu-link" tabindex="-1">Grand Child Item</a>
                                </li>
                                <li class="menu-item">
                                  <a href="#" class="menu-link" tabindex="-1">Grand Child Item</a>
                                </li>
                                <li class="menu-item">
                                  <a href="#" class="menu-link" tabindex="-1">Grand Child Item</a>
                                </li>
                                <li class="menu-item">
                                  <a href="#" class="menu-link" tabindex="-1">Grand Child Item</a>
                                </li>
                              </ul><!-- /grand child menu -->
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link" tabindex="-1">Child Item</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link" tabindex="-1">Menu Item</a>
                        </li>
                      </ul><!-- /child menu -->
                    </li><!-- /.menu-item -->
                  </ul><!-- /.menu -->
                </nav><!-- /.stacked-menu -->
              <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div><!-- /.aside-menu -->
              <!-- Skin changer -->
              <footer class="aside-footer border-top p-2">
                <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
              </footer><!-- /Skin changer -->
            </div><!-- /.aside-content -->
          </aside>  
        
          <main class="app-main">
            <!-- .wrapper -->
            <div class="wrapper">
              <!-- .page -->
              <div class="page">
                <!-- .page-inner -->
                <div class="page-inner">
                  <!-- .page-title-bar -->
                  <header class="page-title-bar">
                    <div class="d-flex flex-column flex-md-row">
                      <p class="lead">
                        <span class="font-weight-bold">Hi, Beni.</span> <span class="d-block text-muted">Here’s what’s happening with your business today.</span>
                      </p>
                      <div class="ml-auto">
                        <!-- .dropdown -->
                        <div class="dropdown">
                          <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>This Week</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                            <div class="dropdown-arrow"></div><!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="dpToday" name="dpFilter" data-start="2019/03/27" data-end="2019/03/27"> <label class="custom-control-label d-flex justify-content-between" for="dpToday"><span>Today</span> <span class="text-muted">Mar 27</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="dpYesterday" name="dpFilter" data-start="2019/03/26" data-end="2019/03/26"> <label class="custom-control-label d-flex justify-content-between" for="dpYesterday"><span>Yesterday</span> <span class="text-muted">Mar 26</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="dpWeek" name="dpFilter" data-start="2019/03/21" data-end="2019/03/27" checked=""> <label class="custom-control-label d-flex justify-content-between" for="dpWeek"><span>This Week</span> <span class="text-muted">Mar 21-27</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="dpMonth" name="dpFilter" data-start="2019/03/01" data-end="2019/03/27"> <label class="custom-control-label d-flex justify-content-between" for="dpMonth"><span>This Month</span> <span class="text-muted">Mar 1-31</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="dpYear" name="dpFilter" data-start="2019/01/01" data-end="2019/12/31"> <label class="custom-control-label d-flex justify-content-between" for="dpYear"><span>This Year</span> <span class="text-muted">2019</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="dpCustom" name="dpFilter" data-start="2019/03/27" data-end="2019/03/27"> <label class="custom-control-label" for="dpCustom">Custom</label>
                              <div class="custom-control-hint my-1">
                                <!-- datepicker:range -->
                                <input type="text" class="form-control flatpickr-input" id="dpCustomInput" data-toggle="flatpickr" data-mode="range" data-disable-mobile="true" data-date-format="Y-m-d" readonly="readonly"> <!-- /datepicker:range -->
                              </div>
                            </div><!-- /.custom-control -->
                          </div><!-- /.dropdown-menu -->
                        </div><!-- /.dropdown -->
                      </div>
                    </div>
                  </header><!-- /.page-title-bar -->
                  <!-- .page-section -->
                  <div class="page-section">
                    <!-- .section-block -->
                    <div class="section-block">
                      <!-- metric row -->
                      <div class="metric-row">
                        <div class="col-lg-9">
                          <div class="metric-row metric-flush">
                            <!-- metric column -->
                            <div class="col">
                              <!-- .metric -->
                              <a href="user-teams.html" class="metric metric-bordered align-items-center">
                                <h2 class="metric-label"> Teams </h2>
                                <p class="metric-value h3">
                                  <sub><i class="oi oi-people"></i></sub> <span class="value">8</span>
                                </p>
                              </a> <!-- /.metric -->
                            </div><!-- /metric column -->
                            <!-- metric column -->
                            <div class="col">
                              <!-- .metric -->
                              <a href="user-projects.html" class="metric metric-bordered align-items-center">
                                <h2 class="metric-label"> Projects </h2>
                                <p class="metric-value h3">
                                  <sub><i class="oi oi-fork"></i></sub> <span class="value">12</span>
                                </p>
                              </a> <!-- /.metric -->
                            </div><!-- /metric column -->
                            <!-- metric column -->
                            <div class="col">
                              <!-- .metric -->
                              <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                                <h2 class="metric-label"> Active Tasks </h2>
                                <p class="metric-value h3">
                                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">64</span>
                                </p>
                              </a> <!-- /.metric -->
                            </div><!-- /metric column -->
                          </div>
                        </div><!-- metric column -->
                        <div class="col-lg-3">
                          <!-- .metric -->
                          <a href="user-tasks.html" class="metric metric-bordered">
                            <div class="metric-badge">
                              <span class="badge badge-lg badge-success"><span class="oi oi-media-record pulse mr-1"></span> ONGOING TASKS</span>
                            </div>
                            <p class="metric-value h3">
                              <sub><i class="oi oi-timer"></i></sub> <span class="value">8</span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                      </div><!-- /metric row -->
                    </div><!-- /.section-block -->
                    <!-- grid row -->
                    <div class="row">
                      <!-- grid column -->
                      <div class="col-12 col-lg-12 col-xl-4">
                        <!-- .card -->
                        <div class="card card-fluid">
                          <!-- .card-body -->
                          <div class="card-body">
                            <h3 class="card-title mb-4"> Completion Tasks </h3>
                            <div class="chartjs" style="height: 292px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                              <canvas id="completion-tasks" style="display: block; height: 292px; width: 334px;" width="668" height="584" class="chartjs-render-monitor"></canvas>
                            </div>
                          </div><!-- /.card-body -->
                        </div><!-- /.card -->
                      </div><!-- /grid column -->
                      <!-- grid column -->
                      <div class="col-12 col-lg-6 col-xl-4">
                        <!-- .card -->
                        <div class="card card-fluid">
                          <!-- .card-body -->
                          <div class="card-body">
                            <h3 class="card-title"> Tasks Performance </h3><!-- easy-pie-chart -->
                            <div class="text-center pt-3">
                              <div class="chart-inline-group" style="height:214px">
                                <div class="easypiechart" data-toggle="easypiechart" data-percent="60" data-size="214" data-bar-color="#346CB0" data-track-color="false" data-scale-color="false" data-rotate="225"><canvas height="428" width="428" style="height: 214px; width: 214px;"></canvas></div>
                                <div class="easypiechart" data-toggle="easypiechart" data-percent="50" data-size="174" data-bar-color="#00A28A" data-track-color="false" data-scale-color="false" data-rotate="225"><canvas height="348" width="348" style="height: 174px; width: 174px;"></canvas></div>
                                <div class="easypiechart" data-toggle="easypiechart" data-percent="75" data-size="134" data-bar-color="#5F4B8B" data-track-color="false" data-scale-color="false" data-rotate="225"><canvas height="268" width="268" style="height: 134px; width: 134px;"></canvas></div>
                              </div>
                            </div><!-- /easy-pie-chart -->
                          </div><!-- /.card-body -->
                          <!-- .card-footer -->
                          <div class="card-footer">
                            <div class="card-footer-item">
                              <i class="fa fa-fw fa-circle text-indigo"></i> 100% <div class="text-muted small"> Assigned </div>
                            </div>
                            <div class="card-footer-item">
                              <i class="fa fa-fw fa-circle text-purple"></i> 75% <div class="text-muted small"> Completed </div>
                            </div>
                            <div class="card-footer-item">
                              <i class="fa fa-fw fa-circle text-teal"></i> 60% <div class="text-muted small"> Active </div>
                            </div>
                          </div><!-- /.card-footer -->
                        </div><!-- /.card -->
                      </div><!-- /grid column -->
                      <!-- grid column -->
                      <div class="col-12 col-lg-6 col-xl-4">
                        <!-- .card -->
                        <div class="card card-fluid">
                          <!-- .card-body -->
                          <div class="card-body pb-0">
                            <h3 class="card-title"> Leaderboard </h3><!-- legend -->
                            <ul class="list-inline small">
                              <li class="list-inline-item">
                                <i class="fa fa-fw fa-circle text-light"></i> Tasks </li>
                              <li class="list-inline-item">
                                <i class="fa fa-fw fa-circle text-purple"></i> Completed </li>
                              <li class="list-inline-item">
                                <i class="fa fa-fw fa-circle text-teal"></i> Active </li>
                              <li class="list-inline-item">
                                <i class="fa fa-fw fa-circle text-red"></i> Overdue </li>
                            </ul><!-- /legend -->
                          </div><!-- /.card-body -->
                          <!-- .list-group -->
                          <div class="list-group list-group-flush">
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                              <!-- .list-group-item-figure -->
                              <div class="list-group-item-figure">
                                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="" data-original-title="Martha Myers"><img src="assets/images/avatars/uifaces16.jpg" alt=""></a>
                              </div><!-- /.list-group-item-figure -->
                              <!-- .list-group-item-body -->
                              <div class="list-group-item-body">
                                <!-- .progress -->
                                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title="" data-original-title="<div class=&quot;text-left small&quot;><i class=&quot;fa fa-fw fa-circle text-purple&quot;></i> 2065<br><i class=&quot;fa fa-fw fa-circle text-teal&quot;></i> 231<br><i class=&quot;fa fa-fw fa-circle text-red&quot;></i> 54</div>">
                                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="73.46140163642832" aria-valuemin="0" aria-valuemax="100" style="width: 73.46140163642832%">
                                    <span class="sr-only">73.46140163642832% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="8.217716115261473" aria-valuemin="0" aria-valuemax="100" style="width: 8.217716115261473%">
                                    <span class="sr-only">8.217716115261473% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.92102454642476" aria-valuemin="0" aria-valuemax="100" style="width: 1.92102454642476%">
                                    <span class="sr-only">1.92102454642476% Complete</span>
                                  </div>
                                </div><!-- /.progress -->
                              </div><!-- /.list-group-item-body -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                              <!-- .list-group-item-figure -->
                              <div class="list-group-item-figure">
                                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="" data-original-title="Tammy Beck"><img src="assets/images/avatars/uifaces15.jpg" alt=""></a>
                              </div><!-- /.list-group-item-figure -->
                              <!-- .list-group-item-body -->
                              <div class="list-group-item-body">
                                <!-- .progress -->
                                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title="" data-original-title="<div class=&quot;text-left small&quot;><i class=&quot;fa fa-fw fa-circle text-purple&quot;></i> 1432<br><i class=&quot;fa fa-fw fa-circle text-teal&quot;></i> 406<br><i class=&quot;fa fa-fw fa-circle text-red&quot;></i> 49</div>">
                                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="54.180855088914115" aria-valuemin="0" aria-valuemax="100" style="width: 54.180855088914115%">
                                    <span class="sr-only">54.180855088914115% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="15.361331819901627" aria-valuemin="0" aria-valuemax="100" style="width: 15.361331819901627%">
                                    <span class="sr-only">15.361331819901627% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.853953840332955" aria-valuemin="0" aria-valuemax="100" style="width: 1.853953840332955%">
                                    <span class="sr-only">1.853953840332955% Complete</span>
                                  </div>
                                </div><!-- /.progress -->
                              </div><!-- /.list-group-item-body -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                              <!-- .list-group-item-figure -->
                              <div class="list-group-item-figure">
                                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="" data-original-title="Susan Kelley"><img src="assets/images/avatars/uifaces17.jpg" alt=""></a>
                              </div><!-- /.list-group-item-figure -->
                              <!-- .list-group-item-body -->
                              <div class="list-group-item-body">
                                <!-- .progress -->
                                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title="" data-original-title="<div class=&quot;text-left small&quot;><i class=&quot;fa fa-fw fa-circle text-purple&quot;></i> 1271<br><i class=&quot;fa fa-fw fa-circle text-teal&quot;></i> 87<br><i class=&quot;fa fa-fw fa-circle text-red&quot;></i> 82</div>">
                                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="52.13289581624282" aria-valuemin="0" aria-valuemax="100" style="width: 52.13289581624282%">
                                    <span class="sr-only">52.13289581624282% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="3.568498769483183" aria-valuemin="0" aria-valuemax="100" style="width: 3.568498769483183%">
                                    <span class="sr-only">3.568498769483183% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="3.3634126333059884" aria-valuemin="0" aria-valuemax="100" style="width: 3.3634126333059884%">
                                    <span class="sr-only">3.3634126333059884% Complete</span>
                                  </div>
                                </div><!-- /.progress -->
                              </div><!-- /.list-group-item-body -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                              <!-- .list-group-item-figure -->
                              <div class="list-group-item-figure">
                                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="" data-original-title="Albert Newman"><img src="assets/images/avatars/uifaces18.jpg" alt=""></a>
                              </div><!-- /.list-group-item-figure -->
                              <!-- .list-group-item-body -->
                              <div class="list-group-item-body">
                                <!-- .progress -->
                                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title="" data-original-title="<div class=&quot;text-left small&quot;><i class=&quot;fa fa-fw fa-circle text-purple&quot;></i> 1527<br><i class=&quot;fa fa-fw fa-circle text-teal&quot;></i> 205<br><i class=&quot;fa fa-fw fa-circle text-red&quot;></i> 151</div>">
                                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="75.18463810930577" aria-valuemin="0" aria-valuemax="100" style="width: 75.18463810930577%">
                                    <span class="sr-only">75.18463810930577% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="10.093549975381585" aria-valuemin="0" aria-valuemax="100" style="width: 10.093549975381585%">
                                    <span class="sr-only">10.093549975381585% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="7.434761201378631" aria-valuemin="0" aria-valuemax="100" style="width: 7.434761201378631%">
                                    <span class="sr-only">7.434761201378631% Complete</span>
                                  </div>
                                </div><!-- /.progress -->
                              </div><!-- /.list-group-item-body -->
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item">
                              <!-- .list-group-item-figure -->
                              <div class="list-group-item-figure">
                                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="" data-original-title="Kyle Grant"><img src="assets/images/avatars/uifaces19.jpg" alt=""></a>
                              </div><!-- /.list-group-item-figure -->
                              <!-- .list-group-item-body -->
                              <div class="list-group-item-body">
                                <!-- .progress -->
                                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title="" data-original-title="<div class=&quot;text-left small&quot;><i class=&quot;fa fa-fw fa-circle text-purple&quot;></i> 643<br><i class=&quot;fa fa-fw fa-circle text-teal&quot;></i> 265<br><i class=&quot;fa fa-fw fa-circle text-red&quot;></i> 127</div>">
                                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="36.89041881812966" aria-valuemin="0" aria-valuemax="100" style="width: 36.89041881812966%">
                                    <span class="sr-only">36.89041881812966% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="15.203671830177854" aria-valuemin="0" aria-valuemax="100" style="width: 15.203671830177854%">
                                    <span class="sr-only">15.203671830177854% Complete</span>
                                  </div>
                                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="7.286288009179575" aria-valuemin="0" aria-valuemax="100" style="width: 7.286288009179575%">
                                    <span class="sr-only">7.286288009179575% Complete</span>
                                  </div>
                                </div><!-- /.progress -->
                              </div><!-- /.list-group-item-body -->
                            </div><!-- /.list-group-item -->
                          </div><!-- /.list-group -->
                        </div><!-- /.card -->
                      </div><!-- /grid column -->
                    </div><!-- /grid row -->
                    <!-- card-deck-xl -->
                    <div class="card-deck-xl">
                      <!-- .card -->
                      <div class="card card-fluid pb-3">
                        <div class="card-header"> Active Projects </div><!-- .lits-group -->
                        <div class="lits-group list-group-flush">
                          <!-- .lits-group-item -->
                          <div class="list-group-item">
                            <!-- .lits-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="has-badge">
                                <a href="page-project.html" class="tile tile-md bg-purple">LT</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/team4.jpg" alt=""></a>
                              </div>
                            </div><!-- .lits-group-item-figure -->
                            <!-- .lits-group-item-body -->
                            <div class="list-group-item-body">
                              <h5 class="card-title">
                                <a href="page-project.html">Looper Admin Theme</a>
                              </h5>
                              <p class="card-subtitle text-muted mb-1"> Progress in 74% - Last update 1d </p><!-- .progress -->
                              <div class="progress progress-xs bg-transparent">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="2181" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                  <span class="sr-only">74% Complete</span>
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- .lits-group-item-body -->
                          </div><!-- /.lits-group-item -->
                          <!-- .lits-group-item -->
                          <div class="list-group-item">
                            <!-- .lits-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="has-badge">
                                <a href="page-project.html" class="tile tile-md bg-indigo">SP</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/team1.jpg" alt=""></a>
                              </div>
                            </div><!-- .lits-group-item-figure -->
                            <!-- .lits-group-item-body -->
                            <div class="list-group-item-body">
                              <h5 class="card-title">
                                <a href="page-project.html">Smart Paper</a>
                              </h5>
                              <p class="card-subtitle text-muted mb-1"> Progress in 22% - Last update 2h </p><!-- .progress -->
                              <div class="progress progress-xs bg-transparent">
                                <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="867" aria-valuemin="0" aria-valuemax="100" style="width: 22%">
                                  <span class="sr-only">22% Complete</span>
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- .lits-group-item-body -->
                          </div><!-- /.lits-group-item -->
                          <!-- .lits-group-item -->
                          <div class="list-group-item">
                            <!-- .lits-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="has-badge">
                                <a href="page-project.html" class="tile tile-md bg-yellow">OS</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/team2.png" alt=""></a>
                              </div>
                            </div><!-- .lits-group-item-figure -->
                            <!-- .lits-group-item-body -->
                            <div class="list-group-item-body">
                              <h5 class="card-title">
                                <a href="page-project.html">Online Store</a>
                              </h5>
                              <p class="card-subtitle text-muted mb-1"> Progress in 99% - Last update 2d </p><!-- .progress -->
                              <div class="progress progress-xs bg-transparent">
                                <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="6683" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
                                  <span class="sr-only">99% Complete</span>
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- .lits-group-item-body -->
                          </div><!-- /.lits-group-item -->
                          <!-- .lits-group-item -->
                          <div class="list-group-item">
                            <!-- .lits-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="has-badge">
                                <a href="page-project.html" class="tile tile-md bg-blue">BA</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/bootstrap.svg" alt=""></a>
                              </div>
                            </div><!-- .lits-group-item-figure -->
                            <!-- .lits-group-item-body -->
                            <div class="list-group-item-body">
                              <h5 class="card-title">
                                <a href="page-project.html">Booking App</a>
                              </h5>
                              <p class="card-subtitle text-muted mb-1"> Progress in 35% - Last update 4h </p><!-- .progress -->
                              <div class="progress progress-xs bg-transparent">
                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="112" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                  <span class="sr-only">35% Complete</span>
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- .lits-group-item-body -->
                          </div><!-- /.lits-group-item -->
                          <!-- .lits-group-item -->
                          <div class="list-group-item">
                            <!-- .lits-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="has-badge">
                                <a href="page-project.html" class="tile tile-md bg-teal">SB</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/sketch.svg" alt=""></a>
                              </div>
                            </div><!-- .lits-group-item-figure -->
                            <!-- .lits-group-item-body -->
                            <div class="list-group-item-body">
                              <h5 class="card-title">
                                <a href="page-project.html">SVG Icon Bundle</a>
                              </h5>
                              <p class="card-subtitle text-muted mb-1"> Progress in 32% - Last update 1d </p><!-- .progress -->
                              <div class="progress progress-xs bg-transparent">
                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="461" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                  <span class="sr-only">32% Complete</span>
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- .lits-group-item-body -->
                          </div><!-- /.lits-group-item -->
                          <!-- .lits-group-item -->
                          <div class="list-group-item">
                            <!-- .lits-group-item-figure -->
                            <div class="list-group-item-figure">
                              <div class="has-badge">
                                <a href="page-project.html" class="tile tile-md bg-pink">SP</a> <a href="#team" class="user-avatar user-avatar-xs"><img src="assets/images/avatars/team4.jpg" alt=""></a>
                              </div>
                            </div><!-- .lits-group-item-figure -->
                            <!-- .lits-group-item-body -->
                            <div class="list-group-item-body">
                              <h5 class="card-title">
                                <a href="page-project.html">Syrena Project</a>
                              </h5>
                              <p class="card-subtitle text-muted mb-1"> Progress in 93% - Last update 8h </p><!-- .progress -->
                              <div class="progress progress-xs bg-transparent">
                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="3981" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                                  <span class="sr-only">93% Complete</span>
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- .lits-group-item-body -->
                          </div><!-- /.lits-group-item -->
                        </div><!-- /.lits-group -->
                      </div><!-- /.card -->
                      <!-- .card -->
                      <div class="card card-fluid">
                        <div class="card-header"> Active Tasks: To-Dos </div><!-- .card-body -->
                        <div class="card-body">
                          <!-- .todo-list -->
                          <div class="todo-list">
                            <!-- .todo-header -->
                            <div class="todo-header"> Looper Admin Theme (1/3) </div><!-- /.todo-header -->
                            <!-- .todo -->
                            <div class="todo">
                              <!-- .custom-control -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="todo1"> <label class="custom-control-label" for="todo1">Eat corn on the cob</label>
                              </div><!-- /.custom-control -->
                            </div><!-- /.todo -->
                            <!-- .todo -->
                            <div class="todo">
                              <!-- .custom-control -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="todo2" checked=""> <label class="custom-control-label" for="todo2">Mix up a pitcher of sangria</label>
                              </div><!-- /.custom-control -->
                            </div><!-- /.todo -->
                            <!-- .todo -->
                            <div class="todo">
                              <!-- .custom-control -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="todo3"> <label class="custom-control-label" for="todo3">Have a barbecue</label>
                              </div><!-- /.custom-control -->
                            </div><!-- /.todo -->
                            <!-- .todo -->
                            <div class="todo">
                              <!-- .custom-control -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="todo4"> <label class="custom-control-label" for="todo4">Ride a roller coaster — <span class="text-red small">Overdue in 3 days</span></label>
                              </div><!-- /.custom-control -->
                            </div><!-- /.todo -->
                            <!-- .todo-header -->
                            <div class="todo-header"> Smart Paper (0/2) </div><!-- /.todo-header -->
                            <!-- .todo -->
                            <div class="todo">
                              <!-- .custom-control -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="todo5"> <label class="custom-control-label" for="todo5">Bring a blanket and lie on the grass at an outdoor concert</label>
                              </div><!-- /.custom-control -->
                            </div><!-- /.todo -->
                            <!-- .todo -->
                            <div class="todo">
                              <!-- .custom-control -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="todo6"> <label class="custom-control-label" for="todo6">Collect seashells at the beach</label>
                              </div><!-- /.custom-control -->
                            </div><!-- /.todo -->
                            <!-- .todo -->
                            <div class="todo">
                              <!-- .custom-control -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="todo7"> <label class="custom-control-label" for="todo7">Swim in a lake</label>
                              </div><!-- /.custom-control -->
                            </div><!-- /.todo -->
                            <!-- .todo -->
                            <div class="todo">
                              <!-- .custom-control -->
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="todo8"> <label class="custom-control-label" for="todo8">Get enough sleep!</label>
                              </div><!-- /.custom-control -->
                            </div><!-- /.todo -->
                          </div><!-- /.todo-list -->
                        </div><!-- /.card-body -->
                        <!-- .card-footer -->
                        <div class="card-footer">
                          <a href="#" class="card-footer-item">View all <i class="fa fa-fw fa-angle-right"></i></a>
                        </div><!-- /.card-footer -->
                      </div><!-- /.card -->
                    </div><!-- /card-deck-xl -->
                  </div><!-- /.page-section -->
                </div><!-- /.page-inner -->
              </div><!-- /.page -->
            </div><!-- .app-footer -->
            <footer class="app-footer">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Support</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Help Center</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Terms of Service</a>
                </li>
              </ul>
              <div class="copyright"> Copyright © 2018. All right reserved. </div>
            </footer><!-- /.app-footer -->
            <!-- /.wrapper -->
          </main>
    </body>

</html>