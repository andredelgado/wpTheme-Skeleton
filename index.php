    <?php get_header(); ?>
    <div class="container">
        <!-- #### THE LOOP #### -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <span class="author">Written by <?php the_author(); ?></span>
        <span class="date">on <?php the_time('F jS, Y'); ?></span>
        <?php the_content('(Read More...)'); ?>
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>