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
                    <h3 class="card-title">Message Detail</h3>
                    @include('home.message')
                </div>

                <div class="card-body">


                            <form action="{{route('admin_message_update',['id'=>$data->id])}}" class="forms-sample" method="post" enctype="multipart/form-data">
                                @csrf
                                <table id="example1" class="table table-bordered table-striped">

                                    <tr>
                                        <th>Id </th><td>{{ $data->id }}</td>
                                    </tr>
                                        <th>Name </th><td>{{ $data->name }}</td>
                                    <tr>
                                    </tr>
                                        <th>Email</th><td>{{ $data->email }}</td>
                                    <tr>
                                    </tr>
                                        <th>Phone</th><td>{{ $data->phone }}</td>
                                    <tr>
                                    </tr>
                                        <th>Subject </th><td>{{ $data->subject }}</td>
                                    <tr>
                                    </tr>
                                        <th>Message </th><td>{{ $data->message }}</td>
                                    <tr>
                                    </tr>
                                        <th>Admin Note </th>
                                    <td>
                                        <textarea id="note" name="note">{{ $data->note }} </textarea>
                                    </td>
                                    <tr>
                                        <td></td> <td>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary mr-2">Update Product</button>
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
