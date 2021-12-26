@extends('layouts.admin')

@section('title','Add Image')



@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Image</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Image</li>
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
                    <h3 class="card-title">Product : {{$data->title}}</h3>
                </div>

                <div class="card-body">
                    <form role="form" action="{{route('user_image_store',['product_id'=>$data->id])}}" class="forms-sample" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> Title </label>
                            <input type="text" name="title" class="form-control"  >
                        </div>
                        <div class="form-group">
                            <label> Image </label>
                            <input type="file" name="image" class="form-control"  >
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Add Image</button>
                    </form>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id </th>
                            <th>Title(s)</th>
                            <th>Image </th>
                            <th> Actions </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach( $images as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->title }}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user_image_delete', ['id'=>$rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Record will be Delete ! Are You Sure ')"> Delete </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
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

