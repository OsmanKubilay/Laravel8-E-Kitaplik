@extends('layouts.home')



@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>My Reviews</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>My Reviews</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="sidebar">
                            <h3 class="sidebar-title">User Menu</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">My Profile </a></li>
                                    <li><a href="#">My Wishlist </a></li>
                                    <li><a href="#">My Reviews </a></li>
                                    <li><a href="#">My Messages </a></li>
                                </ul>
                            </div><!-- End sidebar categories-->
                        </div>
                    </div>
                        <div id="main" class="col-lg-10">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
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
                                        <td>
                                            <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"
                                               target="_blank">
                                                {{$rs->product->title}}</a>
                                        </td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->review}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>
                                            <a href="{{route('user_review_delete',['id'=>$rs->id])}}"
                                               onclick="return confirm('Delete ! Are you sure?')"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </section>



@endsection
