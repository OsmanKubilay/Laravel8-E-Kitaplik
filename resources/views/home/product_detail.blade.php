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
                        <li>Book Detail</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container">
                <div class="row content">

                    <section class="section about-section gray-bg" id="about">
                        <div class="container">
                            <div class="row align-items-center flex-row-reverse">
                                <div class="col-lg-6">
                                    <div class="about-text go-to">
                                        <h3 class="dark-color">{{$data->title}}</h3>
                                        <h6 class="theme-color lead">Yazar :   {{$data->yazar}}</h6>
                                        <p>
                                            {!! $data->detail !!}
                                        </p>
                                        <div class="row about-list">
                                            <div class="col-md-6">
                                                <div class="media">
                                                    <label>Yayınevi</label>
                                                    <p>{{$data->yayinevi}}</p>
                                                </div>
                                                <div class="media">
                                                    <label>Sayfa Sayisi</label>
                                                    <p>{{$data->sayfasayisi}}</p>
                                                </div>
                                                <div class="media">
                                                    <label>Baskı Yılı</label>
                                                    <p>{{$data->baskiyili}}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="media">
                                                    <label>Dil</label>
                                                    <p>{{$data->dil}}</p>
                                                </div>
                                                <div class="media">
                                                    <label>Ebat</label>
                                                    <p>{{$data->ebat}}</p>
                                                </div>
                                                <div class="media">
                                                    <label>Barkod No</label>
                                                    <p>{{$data->barkodno}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-avatar">
                                        <img style="height: 370px" src="{{Storage::url($data->image)}}" title="" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>
@endsection
