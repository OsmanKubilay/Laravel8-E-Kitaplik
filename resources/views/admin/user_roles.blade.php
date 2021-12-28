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
                <h3 class="card-title">User Roles</h3>
                @include('home.message')
            </div>

            <div class="card-body">


                <table id="example1" class="table table-bordered table-striped">

                    <tr>
                        <th>Id</th>
                        <td>{{ $data->id }}</td>
                    </tr>
                    <th>Name</th>
                    <td>{{ $data->name }}</td>
                    <tr>
                    </tr>
                    <th>Email</th>
                    <td>{{ $data->email }}</td>
                    <tr>
                    </tr>
                    <th>Roles</th>
                    <td>
                        <table>
                            @foreach($data->roles as $row)
                                <tr>
                                    <td>
                                    {{$row->name}}
                                    <td>
                                        <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                           onclick="return confirm('Delete ! Are You Sure ')"> Delete </a>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                    <tr>
                    </tr>
                    <tr>
                        <th>Add Role</th>
                        <td>
                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <select name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </form>
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
