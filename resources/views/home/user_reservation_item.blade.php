@extends('layouts.home')

@section('title','My Reservations')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>User Reservations</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>User Reservations</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container">
                <div class="row">
                   <div id="aside" class="col-md-2">
                       @include('home.usermenu')
                   </div>

                        <div id="main" class="col-lg-10">

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Book Id </th>
                                        <th>Book Name </th>
                                        <th>Book Date</th>
                                        <th>Return Date </th>
                                        <th>Days </th>
                                        <th>Status </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach( $datalist as $rs)
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->product->title }}</td>
                                            <td>{{ $rs->bookdate }}</td>
                                            <td>{{ $rs->returndate }}</td>
                                            <td>{{ $rs->days }}</td>
                                            <td>{{ $rs->status }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>



@endsection
