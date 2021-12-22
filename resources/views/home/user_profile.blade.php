@extends('layouts.home')

@section('title','User Profile')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>User Profile</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>User Profile</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container">
                <div class="row content">

                    @include('profile.show')

                </div>
            </div>
        </section>
    </main>
@endsection
