<?php get_header() ?>


  <section>
    <div class="container">
      <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

          <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                <div class="card">
                  <div class="card-body border">

                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                      <?php if(has_post_thumbnail()) {
                            $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                             echo '<img src="' . $image_src[0]  . '" width="100%"  />';
                        }  ?>
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
