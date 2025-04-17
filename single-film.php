<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); 
        $post_id =  get_the_ID();
        $title = get_the_title();
        $acteurs = get_field('acteurs');
        $duree = get_field('duree');
        $youtube_url = get_field('lien_ba');

    ?>
        <section id="center" class="center_o pt-2 pb-2">
            <div class="container-xl">
                <div class="row center_o1">
                    <div class="col-md-5">
                        <div class="center_o1l">
                            <h2 class="mb-0"><?php echo $title ?></h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="center_o1r text-end">
                            <h6 class="mb-0 col_red"><a href="<?php echo esc_url( home_url('/') ) ?>">Home</a> <span class="me-2 ms-2 text-light"><i
                                        class="fa fa-caret-right align-middle"></i></span> <?php echo $title ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="blog" class="pt-4 pb-4 bg_grey">
            <div class="container-xl">
                <div class="row blog_1">
                    <div class="col-md-12">
                        <div class="blog_1l">
                            <div class="blog_1l1 row">
                                <div class="popular_2i1lm position-relative clearfix col-md-4 mt-3">
                                    <div class="popular_2i1lm1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="#">
                                                    <?php the_post_thumbnail('full'); ?>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        <ul>
                                            <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
                                            <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog_1l1i col-md-8 mt-3">
                                    <h2 class="mt-3"><a class="col_red" href="#"><?php echo $title ?></a></h2>
                                    <h6><?php echo get_the_term_list($post_id , 'genre', '', ', ', '' ); ?></h6>
                                    <h6><span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Acteurs : <?php echo $acteurs ?></h6> 
                                    <h6><span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Durée : <?php echo $duree ?></h6>
                                    
                                    <iframe width="100%" height="400px" src="<?php echo $youtube_url ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php get_footer(); ?>

