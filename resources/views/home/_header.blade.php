@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{'/'}}">Kitaplık</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

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
                <li><a href="{{'/fag'}}">fag</a></li>
                <li><a href="#">xxxxx</a></li>

                <li><a href="{{'/contact'}}">Contact</a></li>
                <li><a href="index.html" class="getstarted">Get Started</a></li>

                <div class="pull-right">
                    @auth()
                    <li class="dropdown"><a href="#"><span>{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
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
