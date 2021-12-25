@extends('layouts.home')

@section('title',$data->title)

@section('description') {{$data->description}} @endsection

@section('keywords',$data->keywords)

@section('content')



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Book Detail</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container" align="center">
                <div class="container-body mt-4">
                    <div class="row r3">

                        <div class="col-md-6 p-0 klo">
                            <h3 class="dark-color">{{$data->title}}</h3>
                            <h6 class="theme-color lead"> <b>Yazar</b> : {{$data->yazar}}</h6>
                            <p>
                                {!! $data->detail !!}
                            </p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label><b>Yayınevi</b></label>
                                        <p>{{$data->yayinevi}}</p>
                                    </div>
                                    <div class="media">
                                        <label><b>Sayfa Sayisi</b></label>
                                        <p>{{$data->sayfasayisi}}</p>
                                    </div>
                                    <div class="media">
                                        <label><b>Baskı Yılı</b></label>
                                        <p>{{$data->baskiyili}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label><b>Dil</b></label>
                                        <p>{{$data->dil}}</p>
                                    </div>
                                    <div class="media">
                                        <label><b>Ebat</b></label>
                                        <p>{{$data->ebat}}</p>
                                    </div>
                                    <div class="media">
                                        <label><b>Barkod No</b></label>
                                        <p>{{$data->barkodno}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{Storage::url($data->image)}}" width="90%" height="95%">
                        </div>
                    </div>
                </div>
                <div class="row-cols-md-5" align="center">
                    <a class="float-right btn btn-outline-primary ml-2">Kirala</a>
                </div>
            </div>
        </section>
@endsection
