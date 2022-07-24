@extends('admin.main.index')
@section('container')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ $title }}</h1>
                <div class="alert alert-warning mt-3">Ini adalah list anggota yang sudah diterima. </div>
                @if (session('success'))
                    <div class="alert alert-success mt-2">{{ session('success') }}</div>
                @endif
                <div class="card mb-4 ">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        List Anggota
                    </div>
                    <div class="card-body">

                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NPM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>No Telp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $d)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $d->npm }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->alamat }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->no_hp }}</td>
                                        <td>
                                            <a href="{{ url('edit') }}/{{ $d->id }}"
                                                class="badge bg-success">edit</a>
                                            <a href="{{ url('hapus') }}/{{ $d->id }}"
                                                class="badge bg-danger">hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
