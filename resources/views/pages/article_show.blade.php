<x-main title="Maqolalar" >


    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Blog Detail</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="/">Home</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">Blog Detail</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Detail Start -->
    <div class="container py-5 px-2 bg-white">
        <div class="row px-4">
            <div class="col-12 mb-3">
                <img class="img-fluid mb-4" src="{{asset('img/blog_show.jpg')}}" alt="Image">
                <h2 class="mb-3 font-weight-bold">{!! $article['title'] !!}</h2>
                <p>
                    <b>Мақола:</b> {{$article['publish_place']}} чоп этилган
                </p>
                <div class="d-flex">
                    @if($article['status'] == 'pending')
                        <p style="color: red">Текширилмаган</p>
                    @else

                        <p class="mr-3 text-muted"><i class="fa fa-list-alt"></i> {{ $article['scores']['definitions'] ?? 0 }} ta ilmiy ta'rif  </p>
                        <p class="mr-3 text-muted"><i class="fa fa-puzzle-piece"></i>{{$article['scores']['classifications']}}  ta ilmiy ta </p>
                        <p class="mr-3 text-muted"><i class="fa fa-lightbulb"></i> {{$article['scores']['suggestions']}} ta ilmiy takli </p>
                    @endif
                </div>
                <iframe src="{{ asset($article['pdf']) }}" width="100%" height="600px" style="border:1px solid #ccc;"></iframe>

                <a href="{{ asset($article['pdf']) }}" download class="btn btn-success mt-3" target="_blank">Yuklab olish</a>
            </div>

        </div>
        <div class="row-cols-md-3 px-3 pb-5">
            <a href="{{ route('web.scientists.show', $article['user_id']) }}" class="btn btn-lg btn-block btn-primary mt-auto" >Ортга</a>
        </div>
    </div>
    <!-- Blog Detail End -->

</x-main>
