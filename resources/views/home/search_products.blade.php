@extends('layouts.home')

@section('title',$search . "Book List")

@section('description') {{$data->description}} @endsection

@section('keywords',$data->keywords)

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}} </h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>{{$search}}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container">
                <div class="row row-cols-auto">
                        @foreach($datalist as $rs)
                        <div class="col-sm-6">
                            <div class="card mb-3" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{Storage::url($rs->image)}}" style="width:100%; height:100%"  class="img-fluid rounded-start" >
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body ">
                                            <p class="card-text">{{$rs->description}}</p>
                                            <h5 class="card-title">{{$rs->title}}</h5>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <ul class="list-group">
                                                            <i class="bi bi-pencil-fill ">
                                                                <span>Yazar</span>
                                                                <p>{{$rs->yazar}}</p>
                                                            </i>
                                                            <i class="bi bi-house-fill">
                                                                <span>Yayınevi</span>
                                                                <p>{{$rs->yayinevi}}</p>
                                                            </i>
                                                            <i class="bi bi-book-half">
                                                                <span>Sayfa Sayısı </span>
                                                                <p>{{$rs->sayfasayisi}}</p>
                                                            </i>

                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <ul class="list-group">
                                                            <i class="bi bi-spellcheck">
                                                                <span>Dil</span>
                                                                <p>{{$rs->dil}}</p>
                                                            </i>
                                                            <i class="bi bi-arrows-angle-expand">
                                                                <span>Ebat</span>
                                                                <p>{{$rs->ebat}}</p>
                                                            </i>
                                                            <i class="bi bi-qr-code">
                                                                <span>Barkod No</span>
                                                                <p>{{$rs->barkodno}}</p>
                                                            </i>
                                                        </ul>
                                                    </div>
                                                    <div class="row-cols-md-5" align="right">
                                                        <a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="float-right btn btn-outline-primary ml-2">Detail</a>
                                                        <a class="float-right btn btn-outline-primary ml-2">Kirala</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

@endsection
