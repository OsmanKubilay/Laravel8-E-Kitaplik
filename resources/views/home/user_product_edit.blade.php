@extends('layouts.home')

@section('title','Edit Product')

<script src="{{asset('assets')}}/admin/assets/ckeditor/ckeditor.js"></script>

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Edit Product</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Edit Product</li>
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
                            <form action="{{route('user_product_update',['id'=>$data->id])}}" class="forms-sample" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> Category </label>
                                    <select class="form-control" name="category_id">

                                        @foreach($datalist as $rs)
                                            <option value="{{ $rs->id }}"@if($rs->id == $data->parent_id) selected="selected"@endif>
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
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
                                    <label> Yazar </label>
                                    <input type="text" name="yazar" value="{{$data->yazar}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Yayınevi </label>
                                    <input type="text" name="yayinevi" class="form-control" value="{{$data->yayinevi}}"  >
                                </div>
                                <div class="form-group">
                                    <label> Barkod No </label>
                                    <input type="text" name="barkodno" value="{{$data->barkodno}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Hamur Tipi </label>
                                    <input type="text" name="hamurtipi" value="{{$data->hamurtipi}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Sayfa Sayisi </label>
                                    <input type="number" name="sayfasayisi" value="{{$data->sayfasayisi}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Baskı Yılı </label>
                                    <input type="number" name="baskiyili" value="{{$data->baskiyili}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Dil </label>
                                    <input type="text" name="dil" value="{{$data->dil}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Ebat </label>
                                    <input type="text" name="ebat" value="{{$data->ebat}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Detail </label>
                                    <textarea id="detail" name="detail">{{$data->detail}} </textarea>
                                    <script>
                                        CKEDITOR.replace('detail');
                                    </script>

                                </div>
                                <div class="form-group">
                                    <label> Image </label>
                                    <input type="file" name="image" class="form-control"  >
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" height="60" alt="">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label> Slug </label>
                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" >
                                        <option selected="selected"> {{$data->status}} </option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>

                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update Product</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
