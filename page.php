<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>


  <!-- Navigation -->
  <?php get_template_part('includes/header'); ?>

  <?php if (have_posts()) :
    while (have_posts()) : the_post()
  ?>

      <!-- Page Header -->
      <?php $img = get_eyecatch_with_default(); ?>
      <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
                <h1><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <hr>
    <?php endwhile ?>
  <?php endif ?>
  <!-- Footer -->
  <?php get_template_part('includes/footer') ?>
  <?php get_footer(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>