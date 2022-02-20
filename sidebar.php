<div id="ttr_sidebar" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
  <h2 ><?php _e('Categories'); ?></h2>
  <ul > <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
  <h2 ><?php _e('Archives'); ?></h2>
  <ul > <?php wp_get_archives(); ?> </ul>
</div>
