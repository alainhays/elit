<?php 
/**
 * @package elit
 */
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <figure class="image--primary image-overlay--space">
            <iframe width="728" height="410" src="https://www.youtube.com/embed/SbTcdzb1HR0?rel=0" frameborder="0" allowfullscreen></iframe>
          </figure>

          <div class="story">
            <header class="story-header">
              <h5 class="story-header__kicker"><?php echo wptexturize( get_post_meta( $post->ID, 'elit_kicker', true ) ); ?></h5>
              <?php the_title('<h1 class="story-header__title">', '</h1>', true); ?>
              <h3 class="story-header__teaser"><?php echo get_the_excerpt(); ?></h3>
              <div>
                <div class="story-meta">
                  <?php elit_byline(); ?>
                  <?php elit_posted_on(); ?>
                  <?php elit_comments_link(); ?>
                </div> <!-- story-meta -->
              </div>

              <?php get_template_part('social', 'shiftable'); ?>
            </header>

            <div class="story__body-text">
              <?php the_content(); ?>
            </div> <!-- story__body-text -->
            
            <footer class="story-footer"> 
              <?php elit_story_footer(); ?>
            </footer>
          </div> <!-- .story -->
        </article>
