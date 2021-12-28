@extends('layouts.admin')

@section('title','User List')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id </th>
                                <th> </th>
                                <th>Name</th>
                                <th>E-mail </th>
                                <th>Phone</th>
                                <th>Address </th>
                                <th>Roles </th>

                                <th style="..." colspan="2"> Actions </th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                       @if($rs->profile_photo_path)
                                           <img src="{{Storage::url($rs->profile_photo_path)}}"height="50" style="border-radius: 10px" alt="">
                                       @endif
                                    </td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->address }}</td>
                                    <td>@foreach($rs->roles as $row)
                                            {{$row->name}}
                                        @endforeach
                                        <a href="{{route('admin_user_roles',['id'=>$rs->id])}}"  onclick="return !window.open(this.href,'','top=50 left=100 width=800, height=600')">Roles
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"> Edit </a></td>
                                    <td><a href="{{route('admin_user_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure ')"> Delete </a>  </td>
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
