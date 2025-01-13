<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).e
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IAP
 */

get_header();
?>
<div class="main">
    <div class="container">
        <div class="featured-post">Ce vrem noi pentru autori</div>
    </div>
    <div class="container">
        <div class="article-box__list">
            <?php 
                if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part(  'template-parts/content/content' );
                    endwhile;
                else :
                    echo 'nu avem continut sa afisam';
                endif;
            ?>
            <?php get_template_part(  'template-parts/pagination' ); ?>
        </div>
    </div>

</div>
<?php
get_footer();