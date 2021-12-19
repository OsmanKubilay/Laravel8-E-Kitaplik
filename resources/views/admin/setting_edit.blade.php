@extends('layouts.admin')

@section('title','Edit Setting')

<script src="{{asset('assets')}}/admin/assets/ckeditor/ckeditor.js"></script>




@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Setting </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Setting</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->

        <form action="{{route('admin_setting_update')}}" class="forms-sample" method="post"
              enctype="multipart/form-data">
            <section class="content">

                <!-- Default box -->
                <div class="row">
                    @csrf
                    <div class="card-body">
                        <div class="col-12 col-sm-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-one-general-tab"
                                               data-toggle="pill" href="#custom-tabs-one-general" role="tab"
                                               aria-controls="custom-tabs-one-general" aria-selected="true">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill"
                                               href="#custom-tabs-one-smtp" role="tab"
                                               aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill"
                                               href="#custom-tabs-one-social" role="tab"
                                               aria-controls="custom-tabs-one-social" aria-selected="false">Social
                                                Media</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-about-tab" data-toggle="pill"
                                               href="#custom-tabs-one-about" role="tab"
                                               aria-controls="custom-tabs-one-about" aria-selected="false">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill"
                                               href="#custom-tabs-one-contact" role="tab"
                                               aria-controls="custom-tabs-one-contact" aria-selected="false">Contact
                                                Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill"
                                               href="#custom-tabs-one-references" role="tab"
                                               aria-controls="custom-tabs-one-references" aria-selected="false">References</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-one-general"
                                             role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                            <input type="text" id="id" name="id" value="{{$data->id}}"
                                                   class="form-control">
                                            <div class="form-group">
                                                <label> Title </label>
                                                <input type="text" name="title" value="{{$data->title}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Keywords </label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Description </label>
                                                <input type="text" name="description" value="{{$data->description}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Company </label>
                                                <input type="text" name="company" value="{{$data->company}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Adress </label>
                                                <input type="text" name="adress" value="{{$data->adress}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Phone </label>
                                                <input type="text" name="phone" class="form-control"
                                                       value="{{$data->phone}}">
                                            </div>
                                            <div class="form-group">
                                                <label> Fax </label>
                                                <input type="number" name="fax" value="{{$data->fax}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Email </label>
                                                <input type="text" name="email" value="{{$data->email}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option selected="selected"> {{$data->status}} </option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel"
                                             aria-labelledby="custom-tabs-one-smtp-tab">
                                            <div class="form-group">
                                                <label> Smtp Server </label>
                                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Smtp Email </label>
                                                <input type="text" name="smtpemail" value="{{$data->smtpemail}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Smtp Password </label>
                                                <input type="password" name="smtppasssword"
                                                       value="{{$data->smtppasssword}}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Smtp port </label>
                                                <input type="number" name="smtpport" value="{{$data->smtpport}}"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel"
                                             aria-labelledby="custom-tabs-one-social-tab">
                                            <div class="form-group">
                                                <label> Facebook </label>
                                                <input type="text" name="facebook" value="{{$data->facebook}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Instagram </label>
                                                <input type="text" name="instagram" value="{{$data->instagram}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Twitter </label>
                                                <input type="text" name="twitter" value="{{$data->twitter}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Youtube </label>
                                                <input type="text" name="youtube" value="{{$data->youtube}}"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel"
                                             aria-labelledby="custom-tabs-one-about-tab">
                                            <div class="form-group">
                                                <label> About us </label>
                                                <textarea id="aboutus" name="aboutus">{{$data->aboutus}} </textarea>
                                            </div>
                                            <script>
                                                CKEDITOR.replace('aboutus');
                                            </script>

                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel"
                                             aria-labelledby="custom-tabs-one-contact-tab">
                                            <div class="form-group">
                                                <label> Contact </label>
                                                <textarea id="contact" name="contact">{{$data->contact}} </textarea>
                                            </div>
                                            <script>
                                                CKEDITOR.replace('contact');
                                            </script>

                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel"
                                             aria-labelledby="custom-tabs-one-references-tab">

                                            <div class="form-group">
                                                <label> References </label>
                                                <textarea id="references"
                                                          name="references">{{$data->references}} </textarea>
                                            </div>
                                            <script>
                                                CKEDITOR.replace('references');
                                            </script>


                                        </div>
                                    </div>

                                </div>

                                <!-- /.card -->
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update Setting</button>
                    </div>
                </div>
            </section>
        </form>
    </div>


    <!-- /.content -->

    <!-- /.content-wrapper -->

@endsection

