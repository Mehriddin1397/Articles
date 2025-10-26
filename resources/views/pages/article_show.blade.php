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
                <img class="img-fluid mb-4" src="img/blog_show.jpg" alt="Image">
                <h2 class="mb-3 font-weight-bold">Nonumy ipsum takimata et sanct</h2>
                <div class="d-flex">
                    <p class="mr-3 text-muted"><i class="fa fa-list-alt"></i> 3 ta ilmiy ta'rif  01-Jan-2045</p>
                    <p class="mr-3 text-muted"><i class="fa fa-puzzle-piece"></i> 4 ta ilmiy ta esign</p>
                    <p class="mr-3 text-muted"><i class="fa fa-lightbulb"></i> 2 ta ilmiy takli Comments</p>
                </div>
                <p>Clita duo sadipscing amet ea ut kasd amet dolore, sed erat at dolore vero tempor et sit amet, amet amet elitr et consetetur ea duo. Gubergren tempor rebum clita at sit diam. Ea sadipscing voluptua et sit diam diam sed, gubergren magna ipsum lorem clita dolores nonumy dolor. Gubergren duo invidunt elitr amet labore dolores justo sanctus nonumy. Accusam diam tempor at ea clita dolores dolor et ipsum, dolor voluptua consetetur gubergren sit, no consetetur kasd vero invidunt clita dolore elitr eos, accusam amet et labore sed sadipscing accusam labore dolores. Eirmod no lorem sed dolor nonumy consetetur tempor sed.</p>

            </div>
            <div class="col-12 py-4">
                <h3 class="mb-4 font-weight-bold">3 Comments</h3>
                <div class="media mb-4">
                    <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <button class="btn btn-sm btn-light">Reply</button>
                    </div>
                </div>
                <div class="media mb-4">
                    <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle"
                         style="width:60px;">
                    <div class="media-body">
                        <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <button class="btn btn-sm btn-light">Reply</button>
                        <div class="media mt-4">
                            <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle"
                                 style="width:60px;">
                            <div class="media-body">
                                <h4>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Leave Comment" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Blog Detail End -->

</x-main>
