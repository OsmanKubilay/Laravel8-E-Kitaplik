@extends('layouts.admin')

@section('title','ReviewPage')

@section('content')

    <main id="main">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Reviews</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Reviews</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div id="main" class="col-lg-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Subject</th>
                        <th>Review</th>
                        <th>Status</th>
                        <th>Date</th>

                        <th colspan="3"> Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('home.message')

                    @foreach($datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->user->name}}</td>
                            <td>
                                <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"
                                   target="_blank">
                                    {{$rs->product->title}}</a>
                            </td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->created_at}}</td>

                            <td><a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800, height=600')">Edit</a> </td>
                            <td>
                                <a href="{{route('admin_review_delete',['id'=>$rs->id])}}"
                                   onclick="return confirm('Delete ! Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>

@endsection
