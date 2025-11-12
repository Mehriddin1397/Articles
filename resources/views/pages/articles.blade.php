<x-main title="Maqolalar" >
    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Мақолалар</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="/">Бош саҳифа</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">Мақолалар</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog List Start -->
    <div class="container bg-white pt-5">
        <div class="col-sm-10 text-center text-md-left mb-3">
            <h1 class="mb-3 mb-md-0 text-black text-uppercase font-weight-bold">{{$scientist}}</h1>
        </div>
        @forelse($articles as $a)
        <div class="row blog-item px-3 pb-5">
            <div class="col-md-5">
                <img class="img-fluid mb-4 mb-md-0" src="{{asset('img/article.jpg')}}" alt="Image">
            </div>
            <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{!! $a['title'] !!}</h3>
                <div class="d-flex mb-3">
                    @if($a['status'] == 'pending')
                       <p style="color: red">Текширилмаган</p>
                    @else
                    <small class="mr-2 text-muted"><i class="fa fa-list-alt"></i> {{$a['definitions']}}-та илмий таъриф</small>
                    <small class="mr-2 text-muted"><i class="fa fa-puzzle-piece"></i> {{$a['classifications']}}-та илмий тасниф</small>
                    <small class="mr-2 text-muted"><i class="fa fa-lightbulb"></i> {{$a['suggestions']}}-та илмий таклиф</small>

                    @endif
                </div>
                <p>
                    <b>Jami:</b>  {{$a['total_score']}} ball
                </p><br>
                <p>
                    <b>Мақола:</b> {{$a['publish_place']}} чоп этилган
                </p>
                <a class="btn btn-link p-0" href="{{ route('web.articles.show', $a['id']) }}">Кўриш <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        @empty
            Маълумот йўқ
        @endforelse

        <div class="row-cols-md-3 px-3 pb-5">
            <a href="/" class="btn btn-lg btn-block btn-primary mt-auto" >Ортга</a>
        </div>
    </div>
    <!-- Blog List End -->

</x-main>
