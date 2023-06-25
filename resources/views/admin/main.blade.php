<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="/custom.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet" />
    <style>
        @import url('https://fonts.cdnfonts.com/css/montserrat');
    </style>
</head>

<body>
    @include('layouts.navbar')

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card card-custom">
                    <div class="card-body p-4">
                        <div class="title-custom">
                            Data Berita
                        </div>
                        <hr class="line-custom" />
                        <div>
                            <button class="btn btn-primary mt-4 mb-2">Tambah</button>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50" class="text-center">#</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Isi</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col" width="300">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <button class="btn btn-secondary">detail</button>
                                            <button class="btn btn-success">edit</button>
                                            <button class="btn btn-danger">hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('body')

    {{-- @include('layouts.footer') --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

<script src="https://kit.fontawesome.com/8b3979d85e.js" crossorigin="anonymous"></script>

</html>
