<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

	<div class="sidebar">
		<?php
			do_action('get_header');
			// Use Bootstrap's navbar if enabled in config.php
			if (current_theme_supports('bootstrap-top-navbar')) {
				get_template_part('templates/header-top-navbar');
			} else {
				get_template_part('templates/header');
			}
		?>

		<?php get_template_part('templates/footer'); ?>
	</div>

  <div class="wrap container" role="document">
    <div class="content row">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

</body>
</html>
