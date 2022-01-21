<div class="sidebar" data-image="{{asset('assets')}}/admin/assets/img/sidebar-5.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Creative Tim
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('adminhome')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin_category')}}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Category</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin_products')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Products</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin_message')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Contact Messages</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin_review')}}">
                    <i class="nc-icon nc-atom"></i>
                    <p>Reviews</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin_faq')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Faq</p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <i class="nc-icon nc-bank"></i>
                    Reservations
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('admin_reservations')}}">All Reservations</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin_reservation_list',['status'=>'True'])}}">Tamamlanmış Rezervasyonlar</a>
                    <a class="dropdown-item" href="{{route('admin_reservation_list',['status'=>'New'])}}">Yeni Rezervasyonlar</a>
                </div>
            </li>
            <li>
                <a class="nav-link" href="{{route('admin_users')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Users</p>
                </a>
            </li>

            <li class="nav-item active active-pro">
                <a class="nav-link active" href="{{route('admin_setting')}}">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>
