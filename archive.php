<?php get_header(); ?>

    <section id="center" class="center_o pt-2 pb-2">
        <div class="container-xl">
            <div class="row center_o1">
                <div class="col-md-5">
                    <div class="center_o1l">
                        <h2 class="mb-0">Blog</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="center_o1r text-end">
                        <h6 class="mb-0 col_red"><a href="#">Home</a> <span class="me-2 ms-2 text-light"><i
                                    class="fa fa-caret-right align-middle"></i></span> Blog</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="pt-4 pb-4 bg_grey">
        <div class="container-xl">
            <div class="row blog_1">
                <div class="col-md-12">
                    <div class="blog_1l row">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="blog_1l1 col-md-4">
                                <div class="popular_2i1lm position-relative clearfix">
                                    <div class="popular_2i1lm1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="blog_detail.html"><?php the_post_thumbnail('full'); ?></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        <ul>
                                            <li class="d-inline-block"><a href="blog_detail.html"><i
                                                        class="fa fa-link col_red"></i></a></li>
                                            <li class="d-inline-block"><a href="blog_detail.html"><i
                                                        class="fa fa-search col_red"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog_1l1i mt-3">
                                    <h5><i class="fa fa-folder-open col_red me-1"></i><?php the_category(', '); ?></h5>
                                    <h2 class="mt-3"><a class="col_red" href="<?php  the_permalink() ?>"><?php echo get_the_title(); ?></a></h2>
                                    <h6 class="fw-normal mt-3 col_light">
                                        <span><i class="fa fa-clock-o me-1 align-middle col_red"></i> <?php echo get_the_date(); ?></span>
                                        <span class="ms-3"><i class="fa fa-user me-1 align-middle col_red"></i> <?php the_author(); ?></span>
                                    </h6>
                                    <p class="mt-3"><?php the_excerpt() ?></p>
                                    <h6 class="mt-3 mb-0"><a class="button" href="<?php  the_permalink() ?>"><i
                                                class="fa fa-long-arrow-right align-middle me-1"></i> Lire plus</a></h6>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>