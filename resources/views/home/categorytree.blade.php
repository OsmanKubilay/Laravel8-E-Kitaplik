
@foreach($children as $subcategory)

        @if(count($subcategory->children))
            <li class="dropdown"><a href="#"><span>{{$subcategory->title}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                @include('home.categorytree', ['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif

@endforeach
