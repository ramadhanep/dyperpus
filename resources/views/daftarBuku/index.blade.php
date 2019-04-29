@extends('layouts.app')

@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Daftar Buku</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Daftar Buku</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                <a href="{{ route('daftarBuku.create') }}" class="btn btn-sm btn-neutral">Tambah Data</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
        <!-- Table -->
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-header">
                <h3 class="mb-0">Daftar Buku</h3>
                <p class="text-sm mb-0">
                    Data keseluruhan buku perpustakaan di aplikasi Dyperpus.
                </p>
                </div>
                <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarBukus as $res)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><p class="badge badge-primary">{{ $res->kode_buku }}</p></td>
                            <td>{{ $res->judul_buku }}</td>
                            <td>{{ $res->pengarang }}</td>
                            <td>{{ $res->kategori }}</td>
                            <td>
                                <a href="{{ route('daftarBuku.edit', $res->_id) }}" class="btn btn-outline-warning btn-sm" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit"></i></a>
                                
                                <span data-toggle="tooltip" data-original-title="Hapus">
                                    <a href="#" data-uri="{{ route('daftarBuku.destroy', $res->_id) }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCModal"><i class="fas fa-trash-alt"></i></a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center text-lg-left text-muted">
                &copy; 2019 <a href="http://romadhanedy.ga" class="font-weight-bold ml-1" target="_blank">Romadhan</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <p>1.0.0</p>
                    </li>
                </ul>
            </div>
            </div>
        </footer>
    </div>
    @if(session('alertHapus'))
        <div class="alert-box">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Berhasil menghapus data!</strong> {{ session('alertHapus') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    @elseif(session('alertEdit'))
        <div class="alert-box">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Berhasil memperbarui data!</strong> {{ session('alertEdit') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    @elseif(session('alertTambah'))
        <div class="alert-box">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Berhasil menambah data!</strong> {{ session('alertTambah') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    @endif
        <script>
            $('.alert-box').css('transform', 'translateX(0)');
            setTimeout(function(){
                $('.alert-box').css('transform', 'translateX(400px)');
            }, 4000);
            setTimeout(function(){
                $('.alert-box').hide();
            }, 5000);
        </script>
@endsection