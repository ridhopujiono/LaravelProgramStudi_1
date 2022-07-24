<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Teknik Informatika :: Adi Karya<| Login</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700");

    :root {
        --black: #010100;
        --soft-black: #3d3d4e;
        --soft-gray: #868b8e;
        --gray: #EFEFF6;
        --white: #ffffff;
        --light-white-900: #f9f9f9;
        --main: #2e8bc0;
        --shadow: 0 0 10px -3px rgba(0, 0, 0, .1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        height: 100vh;
    }

    body {
        background-image: url("{{ url('bg.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        font-family: "Poppins", Arial, Helvetica, sans-serif;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card" style="
                width: 340px;
            ">
            <div class="card-body p-4">
                <h4>Login</h4>
                @error('username')
                    <div class="alert alert-danger">data tidak ditemukan</div>
                @enderror
                <form action="{{ url('auth') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-light w-100"
                            style="
                            border: 1px solid purple;
                            color: purple;
                            padding-top: 7px;
                            padding-bottom: 7px;
                        ">Login</button>
                    </div>
                    <div class="form-group mt-2 text-center">
                        <a data-bs-target="#modalInfo" data-bs-toggle="modal" class="text-center w-100">Info User
                            Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Info Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Berikut adalah username dan password untuk akses website</p>
                    <table class="table">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1412200041</td>
                                <td>111</td>
                            </tr>
                            <tr>
                                <td>admin</td>
                                <td>111</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
