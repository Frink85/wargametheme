
<?php /* Template Name: Tour de jeu */ ?>

<?php 
  $args = array(
    'post_type' => 'page',
    'post_parent' => TOUR_PAGE_ID,
    'orderby' => 'date',
    'order' => 'ASC'
  );
  $pagesTurn = new WP_Query($args);
?>

<?php get_header(); ?>

<section class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> <?php the_title(); ?></h1>
      <?php if ( $pagesTurn->have_posts() ) : ?>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <?php $key = 0; ?>
          <?php while ( $pagesTurn->have_posts() ) : $pagesTurn->the_post(); ?>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading<?php echo $key; ?>">
                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key; ?>" aria-expanded="<?php if($key == 0) { echo 'true'; } else { echo 'false'; } ?>" aria-controls="collapse<?php echo $key; ?>"><?php the_title(); ?></a></h4>
              </div>

              <div id="collapse<?php echo $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $key; ?>">
                <div class="panel-body">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
            <?php $key++; ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section><!-- /.container -->

 <?php get_footer(); ?>