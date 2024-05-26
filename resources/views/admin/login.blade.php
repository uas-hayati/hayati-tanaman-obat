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
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/icon.png" />
    <title>Taboti-Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="card">
                <div class="card-body p-6">
                    <div class="text-center">
                        <img src="../assets/img/icon.png" height="80" alt="">
                    </div>
                  <div class="card-title text-center form-label pb-3">Masuk ke akun anda</div>
                  @if ($errors->any())
                  <div class="alert alert-icon alert-danger" role="alert">
                    <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i>
                      @foreach ($errors->all() as $error)
                      {{ $error }}</li>
                      @endforeach
                  </div>
                  @endif
                  <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control"  id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                        <label class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input"/><span class="custom-control-label">Ingat saya</span>
                        </label>
                      </div>
                    <div class="form-footer"><button type="submit" class="btn btn-primary btn-block">Masuk</button></div>
                </form>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
