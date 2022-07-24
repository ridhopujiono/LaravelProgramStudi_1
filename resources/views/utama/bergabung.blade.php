@extends('utama.main.index')

@section('container')
    <div class="container p-4">
        <div class="row">
            <div class="col">
                <h2>Form Pendaftaran Anggota</h2>
                <form action="{{ url('bergabung') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>NPM</label>
                        <input type="text" name="npm" class="form-control" placeholder="Masukan NPM" />
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
                    </div>
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
                    </div>
                    <div class="form-group">
                        <label>No HP:</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" />
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
