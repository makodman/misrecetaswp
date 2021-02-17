<?php get_header(); ?>

<main>

    <?php if (have_posts()) : while (have_posts()): the_post(); ?>

    <article>
        <h1 class="head-strong font-xxl txt-center mb-px"><?php the_title(); ?></h1>
        <div class="txt-center mb-2"><?php echo get_the_date(); ?> | <?php echo get_the_author(); ?></div>
        <div class="block-center-row mb-3">
            <img class="img-med rounded" src="<?php echo get_the_post_thumbnail_url(false, 'large'); ?>">
        </div>
        <div class="line-space font-large block-center-row">
            <div class="col-desk-7 col-tab-8 mb-2">
                <?php the_content(); ?>
            </div>
        </div>
    </article>

    <?php endwhile;endif; ?>
</main>
        
<?php get_footer(); ?>