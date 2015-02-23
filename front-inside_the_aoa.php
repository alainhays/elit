<?php 
/**
 * Template for "Inside the AOA" listing on front page
 *
 * @package elit
 */
d( $inside_the_aoa );
?>


        <div class="size-2-of-3--last inside-the-aoa module">
          <div class="section-title-hat">
            <span class="section-title-hat__text">Inside the AOA</span>
          </div>
          <?php while( $inside_the_aoa->have_posts() ): ?>
            <?php $inside_the_aoa->the_post(); ?>
            <?php $meta = get_post_meta( $post->ID ); ?>
          <article class="f-item--minor">
            <figure class="f-item__fig--minor">
              <a class="f-item__link--minor" href="<?php the_permalink(); ?>">
                <?php $thumb_id = (
                  has_post_thumbnail() ? 
                    get_post_thumbnail_id() : 
                    $meta['elit_thumb'][0]
                );
                  if ( $thumb_id ):
                    $thumb_url = wp_get_attachment_image_src( $thumb_id, 'elit-thumb' );
                ?>
                <img src="<?php echo $thumb_url[0]; ?>" width="96" height="64" class="image__img" alt="<?php get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) ?>">
                <?php endif; ?>
              </a>
            </figure>
            <div class="f-item__body--minor">
              <h2 class="f-item__head--minor">
                <a href="<?php the_permalink(); ?>" class="f-item__link">
                  <?php the_title(); ?>
                </a>
              </h2>
              <p class="f-item__body-text--minor"><?php echo wptexturize( get_the_excerpt() ); ?></p>
            </div>
          </article>
          <?php endwhile; ?>


        </div> <!-- .size-... .inside-the-aoa module -->

