@extends('layouts.home')

@section('title',$setting->title)

@section('description') {{$setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')
    @include('home._slider')
    <main id="main">

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    @foreach($book as $rs)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{Storage::url($rs->image)}}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$rs->title}}</h5>
                                    {{$rs->yazar}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('product',['id'=>$rs->id])}}">Görüntüle</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>


    </main><!-- End #main -->


@endsection
