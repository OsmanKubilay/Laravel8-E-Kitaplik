@extends('layouts.admin')

@section('title','Edit Product')


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit User Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
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
                    <h3 class="card-title">Edit User</h3>
                </div>

                <div class="card-body">
                            <form action="{{route('admin_user_update',['id'=>$data->id])}}" class="forms-sample" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> Name </label>
                                    <input type="text" name="name" value="{{$data->name}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Email </label>
                                    <input type="email" name="email" value="{{$data->email}}" class="form-control"  >
                                </div>

                                <div class="form-group">
                                    <label > Phone </label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label> Address </label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Image </label>
                                    <input type="file" name="image" class="form-control"  >
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="60" alt="">
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update User</button>
                            </form>
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

