<?php get_header(); ?>

    <section id="center" class="center_o pt-2 pb-2">
        <div class="container-xl">
            <div class="row center_o1">
                <div class="col-md-5">
                    <div class="center_o1l">
                        <h2 class="mb-0"><?php single_term_title() ?></h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="center_o1r text-end">
                        <h6 class="mb-0 col_red"><a href="#">Home</a> <span class="me-2 ms-2 text-light"><i
                                    class="fa fa-caret-right align-middle"></i></span> <?php single_term_title() ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="pt-4 pb-4 bg_grey">
        <div class="container-xl">
            <div class="row blog_1">
                <div class="col-md-12">
                    <div class="popular_2i row">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <div class="col-md-6">
								<div class="popular_2i1 row">
									<div class="col-md-6 col-6">
										<div class="popular_2i1lm position-relative clearfix">
											<div class="popular_2i1lm1 clearfix">
												<div class="grid">
													<figure class="effect-jazz mb-0">
														<a href="#"><?php the_post_thumbnail('full'); ?></a>
													</figure>
												</div>
											</div>
											<div
												class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
												<ul>
													<li class="d-inline-block"><a href="#"><i
																class="fa fa-link col_red"></i></a></li>
													<li class="d-inline-block"><a href="#"><i
																class="fa fa-search col_red"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-6">
										<div class="popular_2i1r">
											<h5><a class="col_red" href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h5>
											<h6><?php echo get_the_term_list( get_the_ID(), 'genre', '', ', ', '' ); ?></h6>
											<h6><span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Acteurs : <?php echo get_field('acteurs') ?></h6> 
											<h6><span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Durée : <?php echo get_field('duree') ?></h6>
											<h6 class="mb-0"><a class="button" href="<?php the_permalink() ?>"> Plus d'info</a></h6>
										</div>
									</div>
								</div>
							</div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>