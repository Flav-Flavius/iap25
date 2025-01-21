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
?>
<div class="main">
    <div class="featured__post">
        <div class="container">
            <div class="article-box__list">
                <article <?php post_class( array( 'article-box' ) ) ?>>
                    <div class="article-box__image">
                        <img src="https://placehold.co/490x318" alt="placeholder image">   
                    </div>
                    <div class="article-box__content">
                        <div class="article-box__category">Featured Post</div>
                        <div class="article-box__title">
                            <h2><a href="#">Sticky featured post Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, eligendi?</a></h2>
                        </div>
                        <div class="article-box__info">
                            by <a href="#">Bogdan Rosca</a>, 12.08.2022
                        </div>
                        <div class="article-box__description">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, fugiat dicta expedita atque sed doloremque libero sequi accusamus nihil nisi!
                            </p>
                            <a href="#" class="button">Read More</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
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