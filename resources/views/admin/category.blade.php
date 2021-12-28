@extends('layouts.admin')

@section('title','CategoryPage')

@section('content')
<main>
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

                <div class="card-header">
                    <a href="{{route('admin_category_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add Category</a>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id </th>
                            <th>Parent </th>
                            <th>Title(s)</th>
                            <th>Status</th>
                            <th>Edit </th>
                            <th>Delete </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach( $datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>
                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                </td>
                                <td>{{ $rs->title }}</td>
                                <td>{{ $rs->status }}</td>
                                <td><a href="{{route('admin_category_edit',['id'=>$rs->id])}}"> Edit </a></td>
                                <td><a href="{{route('admin_category_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure ')"> Delete </a>  </td>
                            </tr>
                        @endforeach
                    </table>
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
</main>
@endsection



