<?php get_header(); ?>

<main class="grid">

<?php
    $args = array (
        'posts_per_page' => 4,
        'post_status' => 'publish',
        'post_type' => 'post',
    );
    $the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ): ?>
            
            <section class="separator-block col-desk-9 col-tab-8 col-mob-12">
                <div class="bg-dark pd-1 rounded">
                <div class="grid">

                <?php while($the_query->have_posts()): $the_query->the_post(); ?>

                    <div class="col-desk-6 col-tab-6 mb-2">
                        <h2 class="head-strong txt-center mb05 head-clr"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <a href="<?php the_permalink(); ?>"><img class="img-med rounded" src="<?php echo get_the_post_thumbnail_url(false, 'medium-large'); ?>"></a>
                    </div>

                <?php endwhile;wp_reset_postdata(); ?>

                </div>  
                </div>
            </section>

<?php endif; ?>

            <aside class="col-desk-3 col-tab-4 col-mob-12">

            <?php
                $args = array (
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                );
                $the_query = new WP_Query($args);
            ?>

            <?php if ( $the_query->have_posts() ): ?>

                <h2 class="head-strong font-large txt-center mb05">Menu del dia</h2>
                <div class="bg-dark pd-1 rounded">
                    <div class="grid">

                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>

                        <div class="col-mob-4 mb-1">
                            <h3 class="font-small mb05 head-strong txt-center head-clr"><?php the_cotegory() ?></h3>
                            <img class="img-med rounded" src="<?php echo get_the_post_thumbnail_url(false, 'medium-large'); ?>">
                        </div>

                    <?php endwhile; ?>
                       
                    </div>
                </div>
                <?php endif; ?>
            </aside>
        </main>

<?php get_footer(); ?>
      