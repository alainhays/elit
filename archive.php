<?php 
/**
 * The template for displaying archive pages.
 *
 * @package elit
 */

get_header(); ?>


<?php get_template_part('sidebar', 'leaderboard'); ?>

<?php $layout = 'two-col'; ?>

    <div id="main" class="content">
      <section id="primary" class="content__primary--<?php echo $layout; ?>">
        <div class="row">
          <div class="elit-archive">

        <?php if( have_posts() ): ?>
            <div class="size-1-of-1">
              <div class="section-title--archive">
                <?php elit_the_archive_title( '', '' ); ?>
              </div>
            </div>

            <?php get_template_part('content', 'archive'); ?>
        <?php endif; ?>

            <div class="pagination">
              <div class="pagination__prev">
                <?php echo get_previous_posts_link( '<span class="icon-arrow-left-alt1"></span> Previous' ); ?>
                
              </div>
              <div class="pagination__next">
                <?php echo get_next_posts_link( 'More stories <span class="icon-arrow-right-alt1"></span>' ); ?>
                
              </div>
            </div> <!-- .pagination -->

          </div> <!-- .elit-archive -->
        </div> <!-- .row -->
      </section> <!-- #primary -->

      <section id="secondary" class="<?php elit_secondary_class( $layout ); ?>">
<?php get_sidebar('archive'); ?>
      </section>
    </div> <!-- #main -->

<?php get_footer(); ?>
