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
                <li><a href="index.html" class="active">Kitaplık</a></li>

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
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="blog.html">Blog</a></li>

                <li><a href="contact.html">Contact</a></li>
                <li><a href="index.html" class="getstarted">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
