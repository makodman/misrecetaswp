<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()): the_post(); ?>

    <main class="block-center-row font-xl mb-3">

        <?php the_content(); ?>

    </main>

<?php endwhile;endif; ?>    

<?php get_footer(); ?>