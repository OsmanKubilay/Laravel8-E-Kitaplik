@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="container d-flex align-items-center">
    <nav id="navbar" class="navbar">
        <ul>
            @foreach($parentCategories as $rs)
            <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                @if(count($rs->children))
                    @include('categorytree',['children'=>$rs->children])
                @endif
            </li>
            @endforeach
        </ul>
    </nav><!-- .navbar -->
</div>
