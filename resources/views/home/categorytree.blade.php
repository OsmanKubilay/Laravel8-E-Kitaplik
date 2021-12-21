@foreach($children as $subcategory)

        @if(count($subcategory->children))
            <li class="active" style="..."> {{$subcategory->title}}</li>
            <ul>
                @include('home.categorytree', ['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="#">{{$subcategory->title}}</a></li>
        @endif

@endforeach
