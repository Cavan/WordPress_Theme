<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ThemeDevelopment2019
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php
        if (has_post_thumbnail()){ ?>
        <figure class="featured-image index-image">
	<?php development_post_thumbnail('development-index-img'); ?>
        </figure><!-- .featured-image full-bleed -->
        <?php } ?>
        
        <div class="post__content">
            <header class="entry-header">
                    <?php  development_the_category_list(); ?>
                    <?php
                    if ( is_singular() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;

                    if ( 'post' === get_post_type() ) :
                            ?>
                            <div class="entry-meta">
                                    <?php
                                    development_posted_by();
                                    development_posted_on();

                                    ?>
                            </div><!-- .entry-meta -->
                    <?php endif; ?>
            </header><!-- .entry-header -->

          

            <div class="entry-content">
                    <?php
                    the_excerpt();
                    ?>
            </div><!-- .entry-content -->
            
            <div class="continue-reading">
                <?php 
                $read_more_link = sprintf(
                            wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'development' ),
                                    array(
                                            'span' => array(
                                                    'class' => array(),
                                            ),
                                    )
                            ),
                            get_the_title()
                    );
                ?>
              <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"> 
                  <?php echo $read_more_link; ?>
              </a>
            </div>
            
        </div>
</article><!-- #post-<?php the_ID(); ?> -->
