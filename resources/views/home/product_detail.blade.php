@extends('layouts.home')

@section('title',$data->title)

@section('description') {{$data->description}} @endsection

@section('keywords',$data->keywords)

@section('content')


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Book Detail</h2>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <section id="product_detail" class="content">
            <div class="container" data-aos="fade-up">
                <div class="container-body mt-4" align="center">
                    <div class="row r3">

                        <div class="col-md-6 p-0 klo">
                            <h3 class="dark-color">{{$data->title}}</h3>
                            <h6 class="theme-color lead"><b>Yazar</b> : {{$data->yazar}}</h6>
                            <p>
                                {!! $data->detail !!}
                            </p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label><b>Yayınevi</b></label>
                                        <p>{{$data->yayinevi}}</p>
                                    </div>
                                    <div class="media">
                                        <label><b>Sayfa Sayisi</b></label>
                                        <p>{{$data->sayfasayisi}}</p>
                                    </div>
                                    <div class="media">
                                        <label><b>Baskı Yılı</b></label>
                                        <p>{{$data->baskiyili}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label><b>Dil</b></label>
                                        <p>{{$data->dil}}</p>
                                    </div>
                                    <div class="media">
                                        <label><b>Ebat</b></label>
                                        <p>{{$data->ebat}}</p>
                                    </div>
                                    <div class="media">
                                        <label><b>Barkod No</b></label>
                                        <p>{{$data->barkodno}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{Storage::url($data->image)}}" width="90%" height="95%">
                        </div>
                    </div>
                </div>
                <div class="row-cols-md-5" align="center">
                    <a class="float-right btn btn-outline-primary ml-2">Kirala</a>
                </div>


                <div class="blog-comments">
                    <h4 class="comments-count">Reviews</h4>
                    @foreach($reviews as $rs)
                        <div id="comment-2" class="comment mb-2">
                            <div class="d-flex">
                                <div class="comment-img"><img width="80%" src="{{asset('assets')}}/img/blog/comments-2.jpg" alt="">
                                </div>
                                <div >
                                    <h5><a href="">{{$rs->user->name}}</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">{{$rs->created_at}}</time>
                                    <p>
                                        <strong>
                                            {{$rs->subject}}
                                        </strong>
                                    </p>
                                    <p>
                                        {{$rs->review}}
                                    </p>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <div class="reply-form">
                        <h4>Sizin Yorumunuz...</h4>  @include('home.message')
                        @livewire('review',['id'=>$data->id])
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Vendor JS Files -->


@endsection

