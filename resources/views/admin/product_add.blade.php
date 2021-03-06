@extends('layouts.admin')

@section('title','Add Product')

<script src="{{asset('assets')}}/admin/assets/ckeditor/ckeditor.js"></script>
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Product Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
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
                    <h3 class="card-title">Add Product</h3>
                </div>

                <div class="card-body">


                            <form action="{{route('admin_product_store')}}" class="forms-sample" method="post" enctype="multipart/form-data">
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
                                    <label> Yay??nevi </label>
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
                                    <label> Sayfa Say??s?? </label>
                                    <input type="number" name="sayfasayisi" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Bask?? Y??l?? </label>
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

