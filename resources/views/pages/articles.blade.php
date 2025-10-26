<x-main title="Maqolalar" >
    <!-- Page Header Start -->
    <div class="container py-5 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Maqolalar</h1>
            </div>
            <div class="col-sm-6 text-center text-md-right">
                <div class="d-inline-flex pt-2">
                    <h4 class="m-0 text-white"><a class="text-white" href="{{route('index')}}">Bosh sahifa</a></h4>
                    <h4 class="m-0 text-white px-2">/</h4>
                    <h4 class="m-0 text-white">Maqolalar</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog List Start -->
    <div class="container bg-white pt-5">
        <div class="row blog-item px-3 pb-5">
            <div class="col-md-5">
                <img class="img-fluid mb-4 mb-md-0" src="img/logo.png" alt="Image">
            </div>
            <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">Lorem ipsum dolor sit amet</h3>
                <div class="d-flex mb-3">
                    <small class="mr-2 text-muted"><i class="fa fa-list-alt"></i> 3 ta ilmiy ta'rif</small>
                    <small class="mr-2 text-muted"><i class="fa fa-puzzle-piece"></i> 4 ta ilmiy tasnif</small>
                    <small class="mr-2 text-muted"><i class="fa fa-lightbulb"></i> 2 ta ilmiy taklik</small>
                </div>
                <p>
                    <b>Maqola:</b> Kriminalogiya jurnalining 5-sonida 18-sahifasida chop etilgan
                </p>
                <a class="btn btn-link p-0" href="{{route('articles_show')}}">O'qish <i class="fa fa-angle-right"></i></a>
            </div>
        </div>

        <div class="row px-3 pb-5">
            <nav aria-label="Page navigation">
                <ul class="pagination m-0 mx-3">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Blog List End -->

</x-main>
