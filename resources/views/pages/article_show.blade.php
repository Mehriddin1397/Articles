<x-main title="Maqolalar" >


    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Blog Detail</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="">Home</a></h4>
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
            <div class="col-12">
                <img class="img-fluid mb-4" src="{{asset('img/blog_show.jpg')}}" alt="Image">
                <h2 class="mb-3 font-weight-bold">{!! $article['title'] !!}</h2>
                <div class="d-flex">
                    <p class="mr-3 text-muted"><i class="fa fa-list-alt"></i> {{ $article['scores']['definitions'] ?? 0 }} ta ilmiy ta'rif  </p>
                    <p class="mr-3 text-muted"><i class="fa fa-puzzle-piece"></i>{{$article['scores']['classifications']}}  ta ilmiy ta </p>
                    <p class="mr-3 text-muted"><i class="fa fa-lightbulb"></i> {{$article['scores']['suggestions']}} ta ilmiy takli </p>
                </div>
                <p>Clita duo sadipscing amet ea ut kasd amet dolore, sed erat at dolore vero tempor et sit amet, amet amet elitr et consetetur ea duo. Gubergren tempor rebum clita at sit diam. Ea sadipscing voluptua et sit diam diam sed, gubergren magna ipsum lorem clita dolores nonumy dolor. Gubergren duo invidunt elitr amet labore dolores justo sanctus nonumy. Accusam diam tempor at ea clita dolores dolor et ipsum, dolor voluptua consetetur gubergren sit, no consetetur kasd vero invidunt clita dolore elitr eos, accusam amet et labore sed sadipscing accusam labore dolores. Eirmod no lorem sed dolor nonumy consetetur tempor sed.</p>

            </div>

        </div>
    </div>
    <!-- Blog Detail End -->

</x-main>
