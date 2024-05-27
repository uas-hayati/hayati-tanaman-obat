
@extends('../../layouts.admin')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
      <div class="page-header"><h1 class="page-title">Dashboard</h1></div>
      <div class="card">
        <div class="card-status card-status-left bg-blue"></div>
        <div class="card-header">
          <h3 class="card-title">Selamat Datang, {{ $user->name }} 👋🏼</h3>
          <div class="card-options">
            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
          </div>
        </div>
        <div class="card-body text-justify">Anda memiliki tanggung jawab penting dalam pengolahan data tanaman obat Kalimantan Timur. Oleh karena itu, pastikan data yang anda inputkan sudah sesuai dan benar.</div>
      </div>


      <div class="row row-cards">
        <div class="col-6 col-sm-4 col-lg-2">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">{{$dataTumbuhan}}</div><div class="text-muted mb-4">Total Tanaman</div>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-4 col-lg-2">
          <div class="card">
            <div class="card-body p-3 text-center">
              <div class="h1 m-0">{{$dataAdmin}}</div><div class="text-muted mb-4">Total Admin</div>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="row row-cards row-deck">
        <div class="col-lg-6">
          <div class="card card-aside">
            <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-klaasen-54203-500.jpg)"></a>
            <div class="card-body d-flex flex-column">
              <h4><a href="#">And this isn't my nose. This is a false one.</a></h4>
              <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice! …Are you suggesting that coconuts migr...</div>
              <div class="d-flex align-items-center pt-5 mt-auto">
                <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/female/18.jpg)"></div>
                <div>
                  <a href="./profile.html" class="text-default">Rose Bradley</a>
                  <small class="d-block text-muted">3 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card card-aside">
            <a href="#" class="card-aside-column" style="background-image: url(./demo/photos/david-marcu-114194-500.jpg)"></a>
            <div class="card-body d-flex flex-column">
              <h4><a href="#">Well, I didn't vote for you.</a></h4>
              <div class="text-muted">Well, we did do the nose. Why? Shut up! Will you shut up?! You don't frighten us, English pig-dog...</div>
              <div class="d-flex align-items-center pt-5 mt-auto">
                <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/16.jpg)"></div>
                <div>
                  <a href="./profile.html" class="text-default">Peter Richards</a>
                  <small class="d-block text-muted">3 days ago</small>
                </div>
                <div class="ml-auto text-muted">
                  <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
  @endsection
