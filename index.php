<?php get_header(); ?>
      <section class="subheader"></section>
      <section class="content">
        <div class="wrapper">
          <div id="primary">
            <h3><?php the_title(); ?></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <ul>
              <li>item</li>
              <li>item</li>
              <li>item</li>
              <li>item</li>
            </ul>
            <ol>
              <li>item</li>
              <li>item</li>
              <li>item</li>
              <li>item</li>
            </ol>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </blockquote>
            <input type="text" />
            <textarea></textarea>
            <input type="submit" />
          </div><!-- /#primary -->
        <?php the_sidebar(); ?>
        </div><!-- ./wrapper -->
      </section><!-- /.content, /#front_page -->
<?php get_footer(); ?>