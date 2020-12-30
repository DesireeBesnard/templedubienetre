<?php  
    get_header();
    require_once('components/navbar.inc.php'); 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
?>

<!--Main Navigation-->
<header>
    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-3">
        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-md-6">
                    <h1 class="font-weight-bold mb-4"><?php the_title() ?></h1>
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

        <!--Section: Post-->
        <section class="mt-3">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-8 mb-4">

                    <!-- Breadcrumbs -->
<?php
    $categories = get_the_category();
    $first_category_name = $categories[0]->cat_name;
    $first_category_id = get_cat_ID( $category[0]->cat_name );
    $first_category_link = get_category_link( $category_id );
?>
                    <ol class="breadcrumb white z-depth-1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo get_home_url(); ?>">Home Page</a>
                        </li>
<?php
    if (count($categories)){
?>
                        <li class="breadcrumb-item">
                            <a href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
                        </li>
<?php
    }
?>
                        <li class="breadcrumb-item active"><?php the_title() ?></li>
                    </ol>
                    <!-- Breadcrumbs -->

                    <!-- Featured image -->
                    <?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid z-depth-1-half mb-4')); ?>

                    <!--Card-->
                    <div class="card mb-4">

                    <!--Card content-->
                    <div class="card-body">

                        <p>by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> on <?php echo get_the_date(); ?></p>

                        <hr>

                        <div class="post-content">
                        <?php the_content(); ?>
                        </div>

                    </div>

                    </div>
                    <!--/.Card-->

                    <!--Card-->
                    <div class="card card-avatar mb-4 wow fadeIn">

                        <!-- Card header -->
                        <div class="card-header font-weight-bold">
                            <span>About the author</span>
                            <span class="pull-right">
                                <a href="" class="mr-3">
                                    <i class="fa fa-envelope mr-1"></i>
                                    Send message
                                </a>
                                <a href="">
                                    <i class="fab fa-facebook-f mr-2"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-twitter mr-2"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-instagram mr-2"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin-in mr-2"></i>
                                </a>
                            </span>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <div class="media">
                                <img class="d-flex mr-3 z-depth-1" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 font-weight-bold">Miley Steward</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                    Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--/.Card-->


                    <!--Comments-->
                    <div class="card card-comments mb-3 wow fadeIn">
                        <div class="card-header font-weight-bold">3 comments</div>
                        <div class="card-body">

                            <div class="media d-block d-md-flex mt-4">
                                <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" alt="Generic placeholder image">
                                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                    <h5 class="mt-0 font-weight-bold">Miley Steward
                                        <a href="" class="pull-right">
                                            <i class="fa fa-reply"></i>
                                        </a>
                                    </h5>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                    <div class="media d-block d-md-flex mt-3">
                                        <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg" alt="Generic placeholder image">
                                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                            <h5 class="mt-0 font-weight-bold">Tommy Smith
                                                <a href="" class="pull-right">
                                                    <i class="fa fa-reply"></i>
                                                </a>
                                            </h5>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                            sunt explicabo.
                                        </div>
                                    </div>

                                    <!-- Quick Reply -->
                                    <div class="form-group mt-4">
                                        <label for="quickReplyFormComment">Your comment</label>
                                        <textarea class="form-control" id="quickReplyFormComment" rows="5"></textarea>

                                        <div class="text-center">
                                            <button class="btn btn-info btn-sm" type="submit">Post</button>
                                        </div>
                                    </div>


                                    <div class="media d-block d-md-flex mt-3">
                                        <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg" alt="Generic placeholder image">
                                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                            <h5 class="mt-0 font-weight-bold">Sylvester the Cat
                                                <a href="" class="pull-right">
                                                    <i class="fa fa-reply"></i>
                                                </a>
                                            </h5>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media d-block d-md-flex mt-3">
                                <img class="d-flex mb-3 mx-auto " src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image">
                                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                    <h5 class="mt-0 font-weight-bold">Caroline Horwitz
                                        <a href="" class="pull-right">
                                            <i class="fa fa-reply"></i>
                                        </a>
                                    </h5>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                                    quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                    similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                    fuga.
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/.Comments-->

                    <!--Reply-->
                    <div class="card mb-3 wow fadeIn">
                        <div class="card-header font-weight-bold">Leave a reply</div>
                        <div class="card-body">

                            <!-- Default form reply -->
                            <form>

                                <!-- Comment -->
                                <div class="form-group">
                                    <label for="replyFormComment">Your comment</label>
                                    <textarea class="form-control" id="replyFormComment" rows="5"></textarea>
                                </div>

                                <!-- Name -->
                                <label for="replyFormName">Your name</label>
                                <input type="email" id="replyFormName" class="form-control">

                                <br>

                                <!-- Email -->
                                <label for="replyFormEmail">Your e-mail</label>
                                <input type="email" id="replyFormEmail" class="form-control">


                                <div class="text-center mt-4">
                                    <button class="btn btn-info btn-md" type="submit">Post</button>
                                </div>
                            </form>
                            <!-- Default form reply -->



                        </div>
                    </div>
                    <!--/.Reply-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!-- Sticky content -->
                    <div class="sticky">
                        <!--Section: Dynamic Content Wrapper-->
                        <section>
                          <div id="dynamic-content"></div>

                        </section>
                        <!--Section: Dynamic Content Wrapper-->

                        <!--Card-->
                        <div class="card mb-4">

                            <div class="card-header">Related articles</div>

                            <!--Card content-->
                            <div class="card-body">

                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <a href="">
                                                <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                            </a>
                                            Cras sit amet nibh libero, in gravida nulla (...)
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                                        <div class="media-body">
                                            <a href="">
                                                <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                            </a>
                                            Cras sit amet nibh libero, in gravida nulla (...)
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <a href="">
                                                <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                            </a>
                                            Cras sit amet nibh libero, in gravida nulla (...)
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!-- Sticky content -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->

<?php
        } // end while
    } // end if  
get_footer();
?>