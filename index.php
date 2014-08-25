    <?php get_header(); ?>
    
    <!-- #### THE LOOP #### -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_time('F jS, Y'); ?>
            <?php the_content('(Read More...)'); ?>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>