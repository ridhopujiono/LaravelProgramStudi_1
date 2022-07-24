@extends('utama.main.index')

@section('container')
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id="portofolio">Gallery Teknik Informatika</h2>
            <div class="row pt-5 gx-5 gy-">
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="http://ti.ft.uika-bogor.ac.id/assets/img/gallery/portal-2018-03-16%2007.13.22am.jpeg"
                            class="card-img-top" width="200" height="200" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="http://ti.ft.uika-bogor.ac.id/assets/img/gallery/portal-2018-03-16%2007.13.48am.jpeg"
                            class="card-img-top" width="200" height="200" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="http://ti.ft.uika-bogor.ac.id/assets/img/gallery/portal-2018-03-16%2007.15.14am.jpeg"
                            class="card-img-top" width="200" height="200" />
                    </div>
                </div>
            </div>
        </div>
    @endsection
