@extends('layouts.admin')

@section('title','CategoryPage')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
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
                    <h3 class="card-title">Category List</h3>
                </div>
                <div class="">
                    <div class="card strpied-tabled-with-hover">

                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </thead>
                                <tbody>
                                @foreach( $datalist as $rs)
                                    <p></p>

                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->parent_id }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-body">



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

