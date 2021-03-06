<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="https://vectorlogo4u.com/wp-content/uploads/2020/11/Jata-Malaysia-Vector-01.png">
  <title>
    KATS-SISTEM MAKLUMAT PROJEK PEMBANGUNAN (NPIS)
  </title>
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
   <!-- Nucleo Icons -->
   <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
   <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
   <!-- Font Awesome Icons -->
   <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
   <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
   <!-- CSS Files -->
   <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard-pro/pages/dashboards/default.html" target="_blank">
        <img src="https://vectorlogo4u.com/wp-content/uploads/2020/11/Jata-Malaysia-Vector-01.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">KATS-SISTEM MAKLUMAT PROJEK PEMBANGUNAN (NPIS)</span>
        {{-- <p style="text-transform:uppercase;">{{Auth::user()->role}}</p> --}}
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link " aria-controls="pagesExamples" role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" opacity="0.6"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Options</span>
          </a>
          <div class="collapse " id="pagesExamples">
            <ul class="nav ms-4 ps-3">

              

                    <br>
                    {{-- @if(Auth::user()->role == 'pemohon') --}}
                  <li class="nav-item ">
                    <a class="nav-link " href="permohonanprojek">
                      <span class="sidenav-mini-icon"> P </span>
                      <span class="sidenav-normal"> Permohonan Projek </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="permohonanperuntukan">
                      <span class="sidenav-mini-icon"> P </span>
                      <span class="sidenav-normal"> Permohonan Peruntukan Luar RP </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="projekkontrak">
                      <span class="sidenav-mini-icon"> P </span>
                      <span class="sidenav-normal"> Projek Kontrak </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="pemantauanprojek">
                      <span class="sidenav-mini-icon"> P </span>
                      <span class="sidenav-normal"> Pemantauan Projek </span>
                    </a>
                  </li>

                    {{-- @elseif(Auth::user()->role == 'pentadbir') --}}

                    <li class="nav-item ">
                      <a class="nav-link " href="audittrail">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Audit Trail </span>
                      </a>
                    </li>

                    <li class="nav-item ">
                      <a class="nav-link " href="laporan">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Laporan </span>
                      </a>
                    </li>

                    <li class="nav-item ">
                      <a class="nav-link " href="pemohon">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Pemohon </span>
                      </a>
                    </li>

                    <li class="nav-item ">
                      <a class="nav-link " href="pentadbir">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Pentadbir </span>
                      </a>
                    </li>

                    {{-- @endif --}}
            </ul>
          </div>
        </li>

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm">
                    <a class="opacity-3 text-dark" href="javascript:;">
                      <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>shop </title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(0.000000, 148.000000)">
                                <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                </ol>
              </nav>
              <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </div>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
                </div>
                <ul class="navbar-nav  justify-content-end">
                  <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                      <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                      </div>
                    </a>
                  </li>
                  {{-- <li class="nav-item d-flex align-items-center">
                    <a href="/login" class="nav-link text-body font-weight-bold px-0">
                      <i class="fa fa-user me-sm-1"></i>
                      <span class="d-sm-inline d-none">Sign In</span>
                    </a>
                  </li> --}}
                  <a class="nav-link " data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
                    {{-- <span class="sidenav-mini-icon"> S </span> --}}</a>
                    
                    <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn">Sign Out</button></form>
                  
                  <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                      <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                  </li>
                  <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                      <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                          <div class="d-flex py-1">
                            <div class="my-auto">
                              {{-- <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " alt="user image"> --}}
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">New message</span> from Laur
                              </h6>
                              <p class="text-xs text-secondary mb-0">
                                <i class="fa fa-clock me-1"></i>
                                13 minutes ago
                              </p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                          <div class="d-flex py-1">
                            <div class="my-auto">
                              {{-- <img src="../../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify"> --}}
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-sm font-weight-normal mb-1">
                                <span class="font-weight-bold">New album</span> by Travis Scott
                              </h6>
                              <p class="text-xs text-secondary mb-0">
                                <i class="fa fa-clock me-1"></i>
                                1 day
                              </p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                          <div class="d-flex py-1">
                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                      <g transform="translate(453.000000, 454.000000)">
                                        <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-sm font-weight-normal mb-1">
                                Payment successfully completed
                              </h6>
                              <p class="text-xs text-secondary mb-0">
                                <i class="fa fa-clock me-1"></i>
                                2 days
                              </p>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
          <div class="container-fluid py-4">
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <!-- Card header -->
                  <div class="card-header">
                    <h5 class="mb-0">KATS</h5>
                    <p class="text-sm mb-0">
                      SISTEM MAKLUMAT PROJEK PEMBANGUNAN 
                    </p>
                   
                  </div>

                  @yield('content')
                </div>
            </div>
          </div>
        </div>

        <!--   Core JS Files   -->
        <script src="/js/core/popper.min.js"></script>
        <script src="/js/core/bootstrap.min.js"></script>
        <script src="/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="/js/plugins/datatables.js"></script>
        <!-- Kanban scripts -->
        <script src="/js/plugins/dragula/dragula.min.js"></script>
        <script src="/js/plugins/jkanban/jkanban.js"></script>
        <script>
        const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
            searchable: false,
            fixedHeight: true
        });

        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true
        });
        </script>
        <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
            damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
        <script src="../../assets/js/plugins/fullcalendar.min.js"></script>
        <script>var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
          initialView: "dayGridMonth",
          headerToolbar: {
            start: 'title', // will normally be on the left. if RTL, will be on the right
            center: '',
            end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
          },
          selectable: true,
          editable: true,
          initialDate: '2020-12-01',
          events: [{
              title: 'Call with Dave',
              start: '2020-11-18',
              end: '2020-11-18',
              className: 'bg-gradient-danger'
            },
    
            {
              title: 'Lunch meeting',
              start: '2020-11-21',
              end: '2020-11-22',
              className: 'bg-gradient-warning'
            },
    
            {
              title: 'All day conference',
              start: '2020-11-29',
              end: '2020-11-29',
              className: 'bg-gradient-success'
            },
    
            {
              title: 'Meeting with Mary',
              start: '2020-12-01',
              end: '2020-12-01',
              className: 'bg-gradient-info'
            },
    
            {
              title: 'Winter Hackaton',
              start: '2020-12-03',
              end: '2020-12-03',
              className: 'bg-gradient-danger'
            },
    
            {
              title: 'Digital event',
              start: '2020-12-07',
              end: '2020-12-09',
              className: 'bg-gradient-warning'
            },
    
            {
              title: 'Marketing event',
              start: '2020-12-10',
              end: '2020-12-10',
              className: 'bg-gradient-primary'
            },
    
            {
              title: 'Dinner with Family',
              start: '2020-12-19',
              end: '2020-12-19',
              className: 'bg-gradient-danger'
            },
    
            {
              title: 'Black Friday',
              start: '2020-12-23',
              end: '2020-12-23',
              className: 'bg-gradient-info'
            },
    
            {
              title: 'Cyber Week',
              start: '2020-12-02',
              end: '2020-12-02',
              className: 'bg-gradient-warning'
            },
    
          ],
          views: {
            month: {
              titleFormat: {
                month: "long",
                year: "numeric"
              }
            },
            agendaWeek: {
              titleFormat: {
                month: "long",
                year: "numeric",
                day: "numeric"
              }
            },
            agendaDay: {
              titleFormat: {
                month: "short",
                year: "numeric",
                day: "numeric"
              }
            }
          },
        });
    
        calendar.render();</script>
        </body>

        </html>