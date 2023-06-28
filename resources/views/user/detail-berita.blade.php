@extends('layouts.main')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <nav class="p-3"
                    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @if (request()->segment(1) === 'detail-berita')
                            <li class="breadcrumb-item"><a href="beranda">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                        @else
                            <li class="breadcrumb-item active" aria-current="page"><a href="/berita ">Berita</a></li>
                            <li class="breadcrumb-item" aria-current="page">Detail Berita</li>
                        @endif
                    </ol>
                </nav>
                <div class="card card-custom">
                    <div class="card-body p-4">
                        <div class="news-custom">
                            <div class="news-title p-4">
                                <h3>{{ $data->judul_berita }}</h3>
                                <div class="mt-4">{{ $data->created_at }}</div>
                            </div>
                            <div class="m-3">
                                <div class="text-center">
                                    <img src="{{ asset('images/' . $data->image) }}" />
                                </div>
                                <p class="mt-4">
                                    {{ $data->isi_berita }}
                                </p>
                            </div>
                            <div class="m-3 mt-4">
                                <label for="exampleFormControlTextarea1" class="form-label-custom">Komentar</label>
                                <textarea class="form-control form-control-custom" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <button class="btn btn-primary mt-2 float-end">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">
                <div class="card card-custom">
                    <div class="card-body p-3">
                        <div class="p-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar-custom">

                                </div>
                                <div>
                                    <div class="commentar-user-custom">Gregian</div>
                                    <div class="commentar-date-custom">2023-06-16 20:43:02</div>
                                </div>
                            </div>
                            <div class="commentar-content-custom mt-4">Sangat bermanfaat gan!</div>

                            <div class="mt-4 mb-4">
                                <hr />
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="avatar-custom">

                                </div>
                                <div>
                                    <div class="commentar-user-custom">Budi</div>
                                    <div class="commentar-date-custom">2023-06-16 20:43:02</div>
                                </div>
                            </div>
                            <div class="commentar-content-custom mt-4">Mantap gan!</div>

                            <div class="mt-4 mb-4">
                                <hr />
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="avatar-custom">

                                </div>
                                <div>
                                    <div class="commentar-user-custom">Anton</div>
                                    <div class="commentar-date-custom">2023-06-16 20:43:02</div>
                                </div>
                            </div>
                            <div class="commentar-content-custom mt-4">Baik, dapat dimengerti!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
