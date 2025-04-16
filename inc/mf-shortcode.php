<?php 

function movieflix_shortcode_carousel_home($atts) {
    $atts = shortcode_atts( ['count' => 3], $atts, 'carousel_home' );
    ob_start();

    $film_query = array(
        'post_type' => 'film',
        'posts_per_page' => intval($atts['count']),
        'meta_key' => 'featured_slide',
        'meta_value' => '1', 
    );
    $films = new WP_Query($film_query);
    ?>
    <section id="center" class="center_home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-indicators">
                    <?php for ($i = 0; $i < $films->post_count; $i++) : ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>"
                            class="<?php echo $i == 0 ? 'active' : ''; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
                    <?php endfor; ?>
                </div>
                <?php $i = 0;  while ( $films->have_posts() ) : $films->the_post(); ?>
                
                    <div class="carousel-item <?php echo $i == 0 ? 'active' : ''; ?>">
                        <img src="<?php echo get_field('slide_bg') ?>" class="d-block w-100" alt="<?php echo get_the_title(); ?>">
                        <div class="carousel-caption d-md-block">
                            <h1 class="font_60"><?php echo get_the_title(); ?></h1>
                            <?php 
                                $genres = get_the_terms( get_the_ID(), 'genre');
                            ?>
                            <h6 class="mt-3">
                                <?php foreach($genres as $genre) : ?>
                                <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="<?php echo esc_url(get_term_link($genre)) ?>"><?php echo $genre->name ?></a>
                                <?php endforeach; ?>
                            </h6>
                            <p class="mt-3"><?php echo get_field('synopsis') ?></p>
                            <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> <?php echo get_field('acteurs') ?></p>
                            <p><span class="col_red me-1 fw-bold">Runtime:</span> <?php echo get_field('duree') ?></p>
                            <h6 class="mt-4"><a class="button" href="<?php the_permalink(); ?>"><i class="fa fa-play-circle align-middle me-1"></i>
                                    Watch Trailer</a></h6>
                        </div>
                    </div>
                
                <?php $i++; endwhile; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <? 
    return ob_get_clean();
}
add_shortcode( 'carousel_home', 'movieflix_shortcode_carousel_home' );