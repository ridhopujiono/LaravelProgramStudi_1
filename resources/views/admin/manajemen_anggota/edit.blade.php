@extends('admin.main.index')
@section('container')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ $title }}</h1>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form action="{{ url('update') }}/{{ $data->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>NPM</label>
                                    <input type="text" name="npm" class="form-control" placeholder="Masukan NPM"
                                        value="{{ $data->npm }}" />
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"
                                        value="{{ $data->nama }}" />
                                </div>
                                <div class="form-group">
                                    <label>Alamat:</label>
                                    <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat"value="{{ $data->alamat }}">{{ $data->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukan Email"
                                        value="{{ $data->email }}" />
                                </div>
                                <div class="form-group">
                                    <label>No HP:</label>
                                    <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP"
                                        value="{{ $data->no_hp }}" />
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                </div>

                            </form>
                        </div>
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
