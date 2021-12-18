@extends('layouts.admin')

@section('title','Add Product')

<<<<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>>>>

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


                            <form action="{{route('admin_product_store')}}" class="forms-sample" method="post">
                                @csrf
                                <div class="form-group">
                                    <label> Parent </label>
                                    <select class="form-control" name="category_id" >

                                        @foreach($datalist as $rs)
                                            <option value="{{ $rs->id}}">{{ $rs->title }}</option>
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
                                    <label> Price </label>
                                    <input type="number" name="price" value="0" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Quantity </label>
                                    <input type="number" name="quantity" class="form-control" value="1"  >
                                </div>
                                <div class="form-group">
                                    <label> Minquantity </label>
                                    <input type="number" name="minquantity" value="5" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Tax </label>
                                    <input type="number" name="tax" value="18" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Detail </label>
                                    <textarea id="summernote" name="detail"> </textarea>
                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
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

                                <button type="submit" class="btn btn-primary mr-2">Add Product</button>

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

