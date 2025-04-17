<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <section id="center" class="center_o pt-2 pb-2">
            <div class="container-xl">
                <div class="row center_o1">
                    <div class="col-md-5">
                        <div class="center_o1l">
                            <h2 class="mb-0"><?php echo get_the_title(); ?></h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="center_o1r text-end">
                            <h6 class="mb-0 col_red"><a href="<?php echo esc_url( home_url('/') ) ?>">Home</a> <span class="me-2 ms-2 text-light"><i
                                        class="fa fa-caret-right align-middle"></i></span> <?php echo get_the_title(); ?></h6>
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
                            <div class="blog_1l1">
                                <div class="popular_2i1lm position-relative clearfix">
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
                                <div class="blog_1l1i mt-3">
                                    <h5><i class="fa fa-folder-open col_red me-1"></i><?php the_category(', '); ?></h5>
                                    <h2 class="mt-3"><a class="col_red" href="#"><?php echo get_the_title(); ?></a></h2>
                                    <h6 class="fw-normal mt-3 col_light">
                                        <span><i class="fa fa-clock-o me-1 align-middle col_red"></i> <?php echo get_the_date(); ?></span>
                                        <span class="ms-3"><i class="fa fa-user me-1 align-middle col_red"></i> <?php the_author(); ?></span>
                                    </h6>
                                </div>
                            </div>
                            <div class="blog_1l2">
                                <?php echo get_the_content(); ?>

                                <?php $tags = get_the_tags(); ?>
                                <ul>
                                    <?php if($tags) : ?>
                                        <?php foreach ($tags as $tag) :  ?>
                                            <li class="d-inline-block me-3"><a href="<?php echo esc_url(get_tag_link($tag->term_id)) ?>"><i class="fa fa-tag me-1 col_red"></i> <?php echo $tag->name ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="blog_1l3 mt-4">
                                <h3>Commentaire récents</h3>
                                <?php if(have_comments()) : ?>
                                    <div class="blog_1l5 mt-3">
                                        <?php 
                                            wp_list_comments( array(
                                                'style' => 'div',
                                                'type' => 'comment',
                                                'avatar_size' => 60,
                                                'short_ping' => true,
                                                'callback' => 'movieflix_comments'
                                            ));
                                        ?>
                                    </div>
                                <?php else : ?>
                                    <p class="mt-3">Aucun commentaire pour le moment. Soyez le premier à réagir !</p>
                                <?php endif; ?>
                            </div>
                            
                            <?php 
                                comment_form([
                                    'title_reply' => '<div class="blog_1l3 mt-4"><h3>Laisser un commentaire</h3></div>',
                                    'class_form' => 'blog_1l6 mt-3',
                                    'fields' => [
                                        'author' => '<input class="form-control" placeholder="Name" name="author" type="text">',
                                        'email' => '<input class="form-control mt-3" placeholder="Email" name="email" type="text">',
                                        'url' => '<input class="form-control mt-3" placeholder="Website" name="url" type="text">',
                                    ],
                                    'comment_field' => '<div class="blog_1dt5l"><textarea placeholder="Commentaire" class="form-control form_text" name="comment" rows="5"></textarea></div>',
                                    'submit_button' => '<button type="submit">%4$s</button>', 
                                    'label_submit'  => 'Commenter',
                                ]);
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>



    <?php endwhile; ?>

<?php get_footer(); ?>

