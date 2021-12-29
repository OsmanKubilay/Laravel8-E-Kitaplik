@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{'/'}}">Kitaplık</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <div>
            <form action="{{route('getproduct')}}" method="post">
                @csrf
                <div class="input-group">
                    @livewire('search')
                    <div class="input-group-append">

                    </div>
                </div>
            </form>
            @section('footerjs')
                @livewireScripts
            @endsection
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{'/home'}}" class="active">Anasayfa</a></li>

                <li class="dropdown"><a href="#"><span>Kategoriler</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($parentCategories as $rs)
                            <li class="dropdown"><a href="#"><span>{{$rs->title}}</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{'/aboutus'}}">Aboutus</a></li>
                <li><a href="{{'/references'}}">References</a></li>
                <li><a href="{{'/faq'}}">FAQ</a></li>

                <li><a href="{{'/contact'}}">Contact</a></li>


                <div class="pull-right">
                    @auth()
                        <li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{route('myprofile')}}">My Profile</a></li>
                                <li><a href="{{route('user_reservations')}}">My Reservations</a></li>
                                <li><a href="{{route('myreviews')}}">My Reviews</a></li>
                                <li><a href="{{route('user_products')}}">My Products</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                    @endauth
                    @guest()
                        <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{'/login'}}">Login</a></li>
                                <li><a href="{{'/register'}}">Register</a></li>
                            </ul>
                        </li>
                        @endguest
                        </li>

                </div>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
