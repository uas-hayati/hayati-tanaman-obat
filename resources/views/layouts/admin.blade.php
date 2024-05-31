<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="../assets/img/icon.png" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/icon.png"/>
    <title>Tobati-Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="../assets/css/dashboard.css" rel="stylesheet"/>
    <script src="../assets/js/dashboard.js"></script>
  </head>
  <body class="">
    <div class="page">
        <div class="page-main">
            <div class="header py-4">
              <div class="container">
                <div class="d-flex">
                  <a class="header-brand" href="./index.html">
                    <img src="../assets/img/icon.png" class="header-brand-img" alt="tabler logo">
                  </a>
                  <div class="d-flex order-lg-2 ml-auto">
                    <div class="dropdown">
                      <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar" style="background-image: url(../assets/img/akun.jpg)"></span>
                        <span class="ml-2 d-none d-lg-block">
                          <span class="text-default">{{ $user->name }}</span>
                          <small class="text-muted d-block mt-1">Admin</small>
                        </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="/logout">
                          <i class="dropdown-icon fe fe-log-out"></i> Keluar
                        </a>
                      </div>
                    </div>
                  </div>
                  <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                    <span class="header-toggler-icon"></span>
                  </a>
                </div>
              </div>
            </div>

            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg order-lg-first">
                    <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                      <li class="nav-item">
                        <a href="/dashboard" class="nav-link active"><i class="fe fe-home"></i> Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i>Tanaman Obat</a>
                        <div class="dropdown-menu dropdown-menu-arrow">
                          <a href="/lihat_tumbuhan" class="dropdown-item ">Lihat Data</a>
                          <a href="/tambah_tumbuhan" class="dropdown-item ">Tambah Data</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content -->
            @yield('content')
            <!-- Content -->

          </div>
          <footer class="footer">
            <div class="container">
              <div class="row align-items-center flex-row-reverse">
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">© 2024 - IT Development @Tobati - All Rights Reserved.</div>
              </div>
            </div>
          </footer>
    </div>
  </body>
</html>
