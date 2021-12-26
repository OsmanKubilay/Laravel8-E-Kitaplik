@extends('layouts.home')

@section('title','Frequently Asked Questions')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Frequently Asked Question </h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>FAQ Page</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="faq" class="faq">
            <div class="container">
                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>
                @foreach($datalist as $rs)
                    <div class="d-flex align-items-stretch">
                        <div class="col-lg-5">
                            <i class="bx bx-help-circle">
                                <h4><strong>{{$rs->question}}</strong></h4></i>
                        </div>
                        <div class="col-lg-7">
                            <p>
                                {!!$rs->answer!!}
                            </p>
                        </div>
                    </div><!-- End F.A.Q Item-->
                @endforeach
            </div>
        </section>

@endsection
