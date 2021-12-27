<link href="{{ asset('assets') }}/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Review Detail</h3>
                @include('home.message')
            </div>

            <div class="card-body">


                <form action="{{route('admin_reservation_update',['id' => $data->id ])}}" class="forms-sample" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <table id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>Id</th>
                            <td> {{$data->Id}}</td>
                        </tr>
                        <th>Name</th>
                        <td>{{$data->user->name}}</td>
                        <tr>
                        </tr>
                        <th>Book Name</th>
                        <td>{{$data->product->title}}</td>
                        <tr>
                        </tr>
                        <th>E-mail</th>
                        <td>{{$data->user->email}}</td>
                        <tr>
                        </tr>
                        <th>Phone</th>
                        <td>{{$data->user->phone}}</td>
                        <tr>
                        </tr>
                        <th>Address</th>
                        <td>{{$data->user->address}}</td>
                        <tr>
                        </tr>
                        <th>IP</th>
                        <td>{{$data->IP}}</td>
                        <tr>
                        </tr>
                        <th>Book Date</th>
                        <td>{{$data->bookdate}}</td>
                        <tr>
                        </tr>
                        <th>Return Date</th>
                        <td>{{$data->returndate}}</td>
                        <tr>
                        </tr>
                        <th>Status</th>
                        <td>
                            <select name="status">
                                <option selected> {{$data->status}}</option>
                                <option>New</option>
                                <option>Accepted</option>
                                <option>Completed</option>
                            </select>
                        </td>
                        <tr>
                            <td></td>
                            <td>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2">Update Review</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>


            <!-- /.card-body -->

            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
