<article <?php post_class( array( 'article-box' ) ) ?>>
    <div class="article-box__image">
        
        <?php if (  has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        <?php else: ?>
            <a href="<?php the_permalink(); ?>">
                <img src="https://placehold.co/490x318" alt="placeholder image">
            </a>
        <?php endif; ?>
    </div>
    <div class="article-box__content">
        <div class="article-box__category"><?php the_category( $separator = ', ' ); ?></div>
        <div class="article-box__title">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <div class="article-box__description">
            <p>
                <?php the_excerpt(); ?>
            </p>
        </div>
    </div>
</article>