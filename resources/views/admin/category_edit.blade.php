@extends('layouts.admin')

@section('title','Edit Category')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Category</li>
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
                    <h3 class="card-title">Add Category</h3>
                </div>

                <div class="card-body">


                            <form action="{{route('admin_category_update',['id'=>$data->id])}}" class="forms-sample" method="post">
                                @csrf
                                <div class="form-group">
                                    <label> Parent </label>
                                    <select class="form-control" name="parent_id" style="..." >
                                        <option value="{{$data->parent_id}}" selected="selected">  </option>
                                        <option > Main Category </option>

                                        @foreach( $datalist as $rs)
                                            <option value="{{ $rs->id }}">{{ $rs->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label> Title </label>
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control"  >
                                </div>

                                <div class="form-group">
                                    <label > Keywords </label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label> Description </label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Slug </label>
                                    <input type="text" class="form-control" value="{{$data->slug}}" >
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="form-control" name="status" >

                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>

                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Add Category</button>

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

