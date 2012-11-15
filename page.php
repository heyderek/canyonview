<?php get_header(); ?>
      <section class="subheader"></section>
      <section class="content">
        <div class="wrapper">
          <div id="primary">
            <?php while ( have_posts() ) : the_post(); ?>
              <article>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </article><!-- /.post -->
            <?php endwhile; ?>
          </div><!-- /#primary -->
        <?php get_sidebar(); ?>
        </div><!-- ./wrapper -->
      </section><!-- /.content, /#front_page -->
<?php get_footer(); ?>