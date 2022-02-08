<?php get_header() ?>



  <section class="section_2">
    <div class="container">
      <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

          <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 border">
                <div class="card">
                  <div class="card-body border">

                    <?php set_post_thumbnail_size( 100, 100); ?>
                    <?php the_post_thumbnail(); ?>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <h5>Posted on <?php the_time('F jS, Y') ?></h5>
                    <p><?php the_content(__('(more...)')); ?></p>
                  </div>
                </div>

              </div>
            <?php endwhile; else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>

<?php get_footer() ?>
