<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Romadhan">
  <title>Dyperpus</title>
  <link rel="icon" href="{{ asset('img/logo-single.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('argon/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('argon/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('argon/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('argon/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('argon/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('argon/assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('argon/assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('argon/assets/css/argon.mine209.css') }}?v=1.0.0" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/custom-argon.css') }}">

  <script src="{{ asset('argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
</head>

<body>
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{ url('home') }}">
          <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('home') }}">
                    <i class="ni ni-shop text-primary"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#info" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="info">
                    <i class="ni ni-book-bookmark text-orange"></i>
                    <span class="nav-link-text">Buku</span>
                </a>
                <div class="collapse" id="info">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ url('kategoriBuku') }}" class="nav-link">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('daftarBuku') }}" class="nav-link">Daftar Buku</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('stokBuku') }}" class="nav-link">Stok Buku</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('peminjaman') }}">
                    <i class="ni ni-cart text-green"></i>
                    <span class="nav-link-text">Peminjaman</span>
                </a>
            </li>
          </ul>
          <hr class="my-3">
          <h6 class="navbar-heading p-0 text-muted">Info</h6>
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link" href="#info" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="info">
                    <i class="ni ni-tv-2 text-orange"></i>
                    <span class="nav-link-text">Info</span>
                </a>
                <div class="collapse" id="info">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="../examples/tentang-aplikasi.html" class="nav-link">Tentang Aplikasi</a>
                        </li>
                        <li class="nav-item">
                            <a href="../examples/developer.html" class="nav-link">Developer</a>
                        </li>
                    </ul>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <img alt="Image placeholder" src="{{ asset('argon/assets/img/theme/team-1.jpg') }}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <img alt="Image placeholder" src="{{ asset('argon/assets/img/theme/team-2.jpg') }}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <img alt="Image placeholder" src="{{ asset('argon/assets/img/theme/team-3.jpg') }}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <img alt="Image placeholder" src="{{ asset('argon/assets/img/theme/team-4.jpg') }}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <img alt="Image placeholder" src="{{ asset('argon/assets/img/theme/team-5.jpg') }}" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('argon/assets/img/theme/team-4.jpg') }}">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">
                      Login!
                      @include('_____API/time-ago')
                      @php
                      if(session('logged')){
                        $v = session('logged');
                        echo timeAgo($v);
                      }
                      @endphp
                  </h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-circle-08"></i>
                  <span>Profile</span>
                </a>
                <a href="#!" onclick="$('#keluar').submit();" class="dropdown-item">
                  <i class="ni ni-button-power"></i>
                  <span>Logout</span>
                </a>
                <form id="keluar" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
  </div>
    <div class="modal fade" id="deleteCModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog confirm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form id="conf_delete" method="POST" action="">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  @if (session()->has('success'))
    <div class="alert-box">
      <div class="alert alert-info alert-dismissible fade show" role="alert">
          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
      <span class="alert-text"><strong>Selamat Datang {{ Auth::user()->name }}!</strong> Di Dyperpus</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
    </div>
    <script>
        $('.alert-box').css('transform', 'translateX(0)');
        setTimeout(function(){
            $('.alert-box').css('transform', 'translateX(1000px)');
        }, 4000);
        setTimeout(function(){
            $('.alert-box').hide();
        }, 5000);
    </script>
  @endif
  <script src="{{ asset('argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/lavalamp/js/jquery.lavalamp.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
  
  <script src="{{ asset('argon/assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('argon/assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/argon.mine209.js') }}?v=1.0.0"></script>
  <script src="{{ asset('argon/assets/js/demo.min.js') }}"></script>
  <script>
    $('#deleteCModal').on('show.bs.modal', function(e) {
        $(this).find('#conf_delete').attr('action', $(e.relatedTarget).data('uri'));
        $
    });
  </script>
</body>
</html>