@extends('layouts.home')

@section('title','Reservation Page')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Reservation Page</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Reservation Page</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container">
                <div class="row">
                    <form action="{{route('user_reservation_store',['product_id'=>$product_id])}}" method="post" class="clearfix" >
                        @csrf
                            <div class="col-6 mb-3">
                                <label for="date">Alış Tarihi</label>
                                <div class="input-group date" id="datepicker">
                                    <input id="bookdate" name="bookdate" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="col-6 mb-3">
                                <label for="date">Teslim Tarihi</label>
                                <div class="input-group date" id="datepicker2">
                            </span>
                            </span>
                                    <input name="returndate" id="returndate" type="date" class="form-control">
                                </div>
                            </div>

                            <div class="col-6 mb-3">
                                <label>Not<span class="text-muted"> (İsteğe Bağlı)</span></label>
                                <textarea type="text" name="note" class="form-control" id="note" placeholder="Notunuz:"></textarea>
                            </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Rezeve et</button>
                    </form>
                </div>
            </div>
        </section>

@endsection
