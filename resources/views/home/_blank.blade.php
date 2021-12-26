@extends('layouts.home')

@section('title',$setting->title)

@section('description') {{$setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blank Page</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Blank Page</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container">
                <div class="row">

                  İçerik

                </div>
            </div>
        </section>

@endsection
