@extends('layouts.home')

@section('title','Add Product')

<script src="{{asset('assets')}}/admin/assets/ckeditor/ckeditor.js"></script>

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Add Product</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Add Product</li>
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
                            <form action="{{route('user_product_store')}}" class="forms-sample" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> Category </label>
                                    <select class="form-control" name="category_id" >

                                        @foreach($datalist as $rs)
                                            <option value="{{ $rs->id}}">
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label> Title </label>
                                    <input type="text" name="title" class="form-control"  >
                                </div>

                                <div class="form-group">
                                    <label > Keywords </label>
                                    <input type="text" name="keywords" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label> Description </label>
                                    <input type="text" name="description" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Yazar </label>
                                    <input type="text" name="yazar" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Yayınevi </label>
                                    <input type="text" name="yayinevi" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label> Barkod No </label>
                                    <input type="text" name="barkodno" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Hamur Tipi </label>
                                    <input type="text" name="hamurtipi" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Sayfa Sayısı </label>
                                    <input type="number" name="sayfasayisi" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Baskı Yılı </label>
                                    <input type="number" name="baskiyili" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Dil </label>
                                    <input type="text" name="dil" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Ebat </label>
                                    <input type="text" name="ebat" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Detail </label>
                                    <textarea id="detail" name="detail"> </textarea>
                                    <script>
                                        CKEDITOR.replace('detail');
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label> Image </label>
                                    <input type="file" name="image" class="form-control"  >
                                </div>

                                <div class="form-group">
                                    <label> Slug </label>
                                    <input type="text" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" >
                                        <option selected="selected"> False </option>
                                        <option>True</option>
                                    </select>

                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Add Book</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
