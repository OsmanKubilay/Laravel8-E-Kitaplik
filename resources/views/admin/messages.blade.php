@extends('layouts.admin')

@section('title','Contact Messages List')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Messages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Messages</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->

                <div class="card-header">
                    @include('home.message')
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id </th>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject </th>
                            <th>Message </th>
                            <th>Admin Note </th>

                            <th style="..." colspan="3"> Actions </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach( $datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->name }}</td>
                                <td>{{ $rs->email }}</td>
                                <td>{{ $rs->phone }}</td>
                                <td>{{ $rs->subject }}</td>
                                <td>{{ $rs->message }}</td>
                                <td>{{ $rs->note }}</td>
                                <td>{{ $rs->status }}</td>

                                <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800, height=600')">Edit</a> </td>

                                <td><a href="{{route('admin_message_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure ')"> Delete </a>  </td>
                            </tr>
                        @endforeach


                    </table>
                </div>
                <div class="card-body">



                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->

            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
