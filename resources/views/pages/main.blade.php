<x-main title="Bosh sahifa" >
    <!-- Carousel Start -->
    <div class="container p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/1.5.png" alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/1.6.png" alt="Image">

                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/1.9.png" alt="Image">

                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Blog List Start -->
    <div class="container bg-white pt-5">
        <div class="row blog-item px-3 pb-5">
            <div class="col-md-5">
                <img class="img-fluid mb-4 mb-md-0" src="img/logo.png" alt="Image">
            </div>
            <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">Berdialiyev Bahtiyor Erkinovich</h3>
                <div class="d-flex mb-3">
                    <small class="mr-2 text-muted"><i class="fa fa-star"></i> 13 ball</small>
                    <small class="mr-2 text-muted"><i class="fa fa-newspaper"></i> 15 ta maqola</small>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                </p>
                <a class="btn btn-link p-0" href="{{route('articles')}}">Ko'rish <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- Blog List End -->


</x-main>
