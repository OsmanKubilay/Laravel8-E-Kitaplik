@extends('layouts.admin')

@section('title','ProductPage')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->

                    <div class="card-header">
                        <a href="{{route('admin_product_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add Product</a>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id </th>
                                <th>Category </th>
                                <th>Title(s)</th>
                                <th>Yazar </th>
                                <th>Yayinevi</th>
                                <th>Image </th>
                                <th>Image Gallery </th>
                                <th>Status </th>
                                <th style="..." colspan="2"> Actions </th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach( $datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
                                    </td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->yazar }}</td>
                                    <td>{{ $rs->yayinevi }}</td>

                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin_image_add',['product_id'=>$rs->id])}}">Gallery</a> </td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a href="{{route('admin_product_edit',['id'=>$rs->id])}}"> Edit </a></td>
                                    <td><a href="{{route('admin_product_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure ')"> Delete </a>  </td>
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

