@extends('layouts.admin')

@section('title','Admin Reservation List')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reservation List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Reservation List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Reservation List</h3>
                </div>

                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id </th>
                            <th>Name </th>
                            <th>E-mail </th>
                            <th>Phone</th>
                            <th>Address </th>
                            <th>Book Date</th>
                            <th>Return Date </th>
                            <th>Days </th>
                            <th>Status </th>
                            <th style="..." colspan="2"> Actions </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach( $datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->user->name }}</td>
                                <td>{{ $rs->user->email }}</td>
                                <td>{{ $rs->user->phone }}</td>
                                <td>{{ $rs->user->address }}</td>
                                <td>{{ $rs->bookdate }}</td>
                                <td>{{ $rs->returndate }}</td>
                                <td>{{ $rs->days }}</td>
                                <td>{{ $rs->product->status }}</td>
                                <td><a href="{{route('admin_reservation_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800, height=600')">Edit</a> </td>
                                <td><a href="{{route('admin_reservation_delete',['id'=>$rs->id])}}">Delete</a> </td>

                            </tr>
                        @endforeach


                    </table>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

