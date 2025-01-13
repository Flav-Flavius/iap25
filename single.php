<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IAP
 */

get_header();


/* Start the Loop */
while ( have_posts() ) : the_post();
?>
    <div class="container">
        <article <?php post_class( array( 'article-single' ) ) ?>>
            <div class="article-single__header">
                <div class="article-single__meta">
                    <div class="article-single__author"><?php echo get_the_author(); ?></div>
                    <div class="article-single__date"><?php echo get_the_date( 'j F Y' ); ?></div>
                    <div class="article-single__category"><?php the_category( $separator = ', ' ); ?></div>
                </div>
                <div class="article-single__title">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </div>
            </div>
            <div class="article-single__featured_image">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="article-single__content">
                <?php the_content(); ?>
            </div>
        </article>

        <div class="article-single__navigation">
            <?php 
                the_post_navigation(
                    array(
                        'next_text' => '<p class="meta-nav">Next</p><p class="post-title">%title</p>',
                        'prev_text' => '<p class="meta-nav">Prev</p><p class="post-title">%title</p>',
                    )
                );
            ?>
        </div>
        
    </div>
<?php
endwhile; // End of the loop.
get_footer();