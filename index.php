<?php  get_header(); ?>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand pt-0 waves-effect" href="">
                    <!-- <img src="https://mdbootstrap.com/img/logo/mdb-noshadow-38px" alt="MDB logo"> -->
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Categories </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="">Marketing Automation</a>
                                <a class="dropdown-item" href="">Web Push Notifications</a>
                                <a class="dropdown-item" href="">Analytics & Tag Manager</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/b4/jquery/getting-started/download/" target="_blank">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Link</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="nav-link border border-light rounded waves-effect"
                                target="_blank">
                                <i class="fa fa-github mr-2"></i>MDB GitHub
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Intro -->
        <div class="card card-intro blue-gradient mb-4">

            <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

                <!--Grid row-->
                <div class="row d-flex justify-content-center">

                    <!--Grid column-->
                    <div class="col-md-6">

                        <h1 class="font-weight-bold mb-4">Website Name</h1>
                        <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ad impedit corporis ratione facere?
                            Cupiditate unde aliquid reiciendis animi, quas inventore, praesentium neque voluptatem, iusto
                            perferendis placeat similique dolor eum?
                        </p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>

        </div>
        <!-- Intro -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Dynamic Content Wrapper-->
            <section>
              <div id="dynamic-content"></div>

            </section>
            <!--Section: Dynamic Content Wrapper-->

            <!--Section: Articles-->
            <section class="text-center">

                <!--Section heading-->
                <h1 class="h2 font-weight-bold my-4">Recent articles</h1>

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/81.jpg" class="img-fluid" alt="First sample image">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Excerpt-->
                        <a href="" class="pink-text">
                            <h6 class="mb-3 mt-4">
                                <i class="fa fa-bolt"></i>
                                <strong> Web Push Notifications</strong>
                            </h6>
                        </a>
                        <h4 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>This is title of the news</strong>
                        </h4>
                        <p>by
                            <a class="font-weight-bold dark-grey-text">Billy Forester</a>, 15/07/2018</p>
                        <p class="grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus voluptas.</p>
                        <a class="btn btn-info btn-rounded btn-md">Read more</a>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="img-fluid" alt="Second sample image">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Excerpt-->
                        <a href="" class="deep-orange-text">
                            <h6 class="mb-3 mt-4">
                                <i class="fa fa-pie-chart"></i>
                                <strong> Analytics</strong>
                            </h6>
                        </a>
                        <h4 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>This is title of the news</strong>
                        </h4>
                        <p>by
                            <a class="font-weight-bold dark-grey-text">Billy Forester</a>, 15/07/2018</p>
                        <p class="grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus voluptas.</p>
                        <a class="btn btn-info btn-rounded btn-md">Read more</a>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" class="img-fluid" alt="Thrid sample image">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Excerpt-->
                        <a href="" class="cyan-text">
                            <h6 class="mb-3 mt-4">
                                <i class="fa fa-cogs"></i>
                                <strong> Marketing Automation</strong>
                            </h6>
                        </a>
                        <h4 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>This is title of the news</strong>
                        </h4>
                        <p>by
                            <a class="font-weight-bold dark-grey-text">Billy Forester</a>, 15/07/2018</p>
                        <p class="grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus voluptas.</p>
                        <a class="btn btn-info btn-rounded btn-md">Read more</a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-2">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/81.jpg" class="img-fluid" alt="First sample image">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Excerpt-->
                        <a href="" class="pink-text">
                            <h6 class="mb-3 mt-4">
                                <i class="fa fa-bolt"></i>
                                <strong> Web Push Notifications</strong>
                            </h6>
                        </a>
                        <h4 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>This is title of the news</strong>
                        </h4>
                        <p>by
                            <a class="font-weight-bold dark-grey-text">Billy Forester</a>, 15/07/2018</p>
                        <p class="grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus voluptas.</p>
                        <a class="btn btn-info btn-rounded btn-md">Read more</a>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-2">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="img-fluid" alt="Second sample image">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Excerpt-->
                        <a href="" class="deep-orange-text">
                            <h6 class="mb-3 mt-4">
                                <i class="fa fa-pie-chart"></i>
                                <strong> Analytics</strong>
                            </h6>
                        </a>
                        <h4 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>This is title of the news</strong>
                        </h4>
                        <p>by
                            <a class="font-weight-bold dark-grey-text">Billy Forester</a>, 15/07/2018</p>
                        <p class="grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus voluptas.</p>
                        <a class="btn btn-info btn-rounded btn-md">Read more</a>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-2">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" class="img-fluid" alt="Thrid sample image">
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Excerpt-->
                        <a href="" class="cyan-text">
                            <h6 class="mb-3 mt-4">
                                <i class="fa fa-cogs"></i>
                                <strong> Marketing Automation</strong>
                            </h6>
                        </a>
                        <h4 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>This is title of the news</strong>
                        </h4>
                        <p>by
                            <a class="font-weight-bold dark-grey-text">Billy Forester</a>, 15/07/2018</p>
                        <p class="grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus voluptas.</p>
                        <a class="btn btn-info btn-rounded btn-md">Read more</a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Pagination -->
                <nav class="d-flex justify-content-center my-4 wow fadeIn">
                    <ul class="pagination pagination-circle pg-info mb-0">

                        <!--First-->
                        <li class="page-item disabled">
                            <a class="page-link">First</a>
                        </li>

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">5</a>
                        </li>

                        <!--Arrow right-->
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>

                        <!--Last-->
                        <li class="page-item">
                            <a class="page-link">Last</a>
                        </li>

                    </ul>
                </nav>

            </section>
            <!--Section: Articles-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/b4/jquery/getting-started/download/" target="_blank" role="button">Download MDB
                <i class="fa fa-download ml-2"></i>
            </a>
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
                <i class="fa fa-graduation-cap ml-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fab fa-google-plus-g mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/mdb-ui-kit" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->
<?php  get_footer(); ?>