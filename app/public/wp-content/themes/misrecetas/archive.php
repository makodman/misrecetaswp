<?php get_header(); ?>

<main>

    <h1 class="head-strong mb-2"><?php echo get_the_archive_title(); ?></h1>

    <?php if (have_posts()) : while (have_posts()): the_post(); ?>

            <article class="mb-3">
                <h2 class="head-strong mb05 font-md"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="grid">
                    <div class="col-desk-4 col-tab-5 mb-1">
                        <img class="img-med rounded" src="<?php echo get_the_post_thumbnail_url(false, 'medium-large'); ?>">
                    </div>
                    <div class="col-desk-8 col-tab-7">
                        <div class="head-strong mb-1 font-md"><?php echo get_the_date(); ?> | <?php the_author(); ?></div>
                        <div class="line-space mb-1">
                            <?php the_excerpt(); ?>
                        </div>
                        
                            <a class="link-reg" href="<?php the_permalink(); ?>"> Ver receta</a>
                        
                    </div>
                </div>
            </article>

            <?php endwhile; ?>

        <nav class="nav-pag font-md block-center-row mb-2">

            <?php
                echo paginate_links(
                    array(
                        'show_all' => true,
                        'prev_text' => '<',
                        'next_text' => '>',
                        'after_page_number' => '<span class="separator"> | </span>'
                    )
                );
            ?>
            </nav>

        <?php endif; ?>


</main>

<?php get_footer(); ?>