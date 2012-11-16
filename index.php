<?php get_header(); ?>
      <section class="subheader"></section>
      <section class="content">
        <div class="wrapper">
          <div id="primary">
            <?php while ( have_posts() ) : the_post(); ?>
              <article class="post">
                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <?php the_content(); ?>
              </article><!-- /.post -->
            <?php endwhile; ?>
          </div><!-- /#primary -->
        <?php get_sidebar(); ?>
        </div><!-- ./wrapper -->
      </section><!-- /.content, /#front_page -->
<?php get_footer(); ?>