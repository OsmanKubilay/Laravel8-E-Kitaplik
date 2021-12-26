@extends('layouts.admin')

@section('title','Add Faq')

<script src="{{asset('assets')}}/admin/assets/ckeditor/ckeditor.js"></script>
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Faq Home</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Faq</li>
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
                    <h3 class="card-title">Add Faq</h3>
                </div>

                <div class="card-body">


                            <form action="{{route('admin_faq_store')}}" class="forms-sample" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> Position </label>
                                    <input type="number" id="position" name="position" value="0" class="form-control"  >
                                </div>
                                <div class="form-group">
                                    <label> Question </label>
                                    <input type="text" id="question" name="question" class="form-control"  >
                                </div>

                                <div class="form-group">
                                    <label> Answer </label>
                                    <textarea id="answer" name="answer"> </textarea>
                                    <script>
                                        CKEDITOR.replace('answer');
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" >
                                        <option selected="selected"> False </option>
                                        <option>True</option>
                                    </select>

                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Add</button>

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

