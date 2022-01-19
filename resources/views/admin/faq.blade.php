@extends('layouts.admin')

@section('title','Frequently Asked Question List')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Frequently Asked Question</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Frequently Asked Question</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->

                <div class="card-header">
                    <a href="{{route('admin_faq_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add Faq</a>
                    @include('home.message')
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id </th>
                            <th>Position</th>
                            <th>Question</th>
                            <th>Answer </th>
                            <th>Status </th>
                            <th style="..." colspan="2"> Actions </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach( $datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->position}}</td>
                                <td>{{ $rs->question }}</td>
                                <td>{!!  $rs->answer !!}</td>
                                <td>{{ $rs->status }}</td>
                                <td><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"> Edit </a></td>
                                <td><a href="{{route('admin_faq_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure ')"> Delete </a>  </td>
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

