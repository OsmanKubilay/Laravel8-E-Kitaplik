@extends('layouts.home')

@section('title','My Products')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>User Products</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>User Products</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blank_page" class="content">
            <div class="container">
                <div class="row">
                   <div id="aside" class="col-md-2">
                       @include('home.usermenu')
                   </div>

                        <div id="main" class="col-lg-10">
                            <div class="card-header">
                                <a href="{{route('user_product_add')}}" type="button" class="btn btn-block btn-info" style="width: 200px">Add Product</a>
                            </div>

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
                                            <td><a href="{{route('user_image_add',['product_id'=>$rs->id])}}"onclick="return !window.open(this.href,'','top=50 left=100 width=800, height=600')">Gallery</a> </td>
                                            <td>{{ $rs->status }}</td>
                                            <td><a href="{{route('user_product_edit',['id'=>$rs->id])}}"> Edit </a></td>
                                            <td><a href="{{route('user_product_delete', ['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure ')"> Delete </a>  </td>
                                        </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>



@endsection
