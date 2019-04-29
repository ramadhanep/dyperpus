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
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
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
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Tambah Data Daftar Buku</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                        <div class="col-lg-8">
                            <p class="mb-0">
                                Catatan : Pastikan data terinput dengan benar!
                            </p>
                        </div>
                        </div>
                        <hr>
                        <form class="needs-validation" novalidate="" method="POST" action="{{ route('daftarBuku.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-control-label" for="judul_buku">Judul Buku</label>
                                    <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul Buku" required="">
                                    <div class="valid-feedback">
                                        Bagus!
                                    </div>
                                    <div class="invalid-feedback">
                                        Form Judul Buku wajib diisi!.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-control-label" for="pengarang">Pengarang</label>
                                    <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Pengarang" required="">
                                    <div class="valid-feedback">
                                        Bagus!
                                    </div>
                                    <div class="invalid-feedback">
                                        Form Pengarang wajib diisi!.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-control-label" for="kategori">Kategori</label>
                                    <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" required="">
                                    <div class="valid-feedback">
                                        Bagus!
                                    </div>
                                    <div class="invalid-feedback">
                                        Form Kategori wajib diisi!.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mb-3">
                                <input class="custom-control-input" id="invalidCheck" type="checkbox" value="" required="">
                                <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
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
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
                }, false);
            });
            }, false);
        })();
    </script>
@endsection