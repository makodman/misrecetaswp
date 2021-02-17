<?php /* Template name: recetas */ ?> 

<?php get_header(); ?>

<main>

<?php
    $args = array (
        'posts_per_page' => 2,
        'post_status' => 'publish',
        'post_type' => 'post',
        'paged' => $paged
    );
    $the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ): ?>

    <?php while($the_query->have_posts()): $the_query->the_post(); ?>

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

    <?php endwhile;wp_reset_postdata(); ?>

    <nav class="nav-pag font-md block-center-row mb-2">

        <?php
            echo paginate_links(
                array(
                    'current' => max(1, $paged),
                    'total' => $the_query->max_num_pages,
                    'show_all' => true,
                    'prev_text' => '<',
                    'next_text' => '>',
                    'after_page_number' => '<span class="separator"> | </span>'
                )
            );
        ?>
        </nav>

<?php else: ?>
    <div>Not found</div>  

<?php endif; ?>

<!--<nav class="nav-main font-md block-center-row mb-2">

                <ul>
                    <li><a href=""> < </a></li>
                    <li>1</li> 
                    <li class="separator"> | </li>   
                    <li><a href=""> 2 </a></li>
                    <li class="separator"> | </li> 
                    <li><a href=""> 3 </a></li>
                    <li class="separator"> ... </li> 
                    <li><a href=""> 12 </a></li>
                    <li><a href=""> > </a></li>
                </ul>-->

</main>

<?php get_footer(); ?>         