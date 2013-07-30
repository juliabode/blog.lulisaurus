<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<a href="<?php the_permalink(); ?>"><span class="hover-background"></span></a>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
</article>
