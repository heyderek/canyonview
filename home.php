<?php get_header(); ?>
      <section id="slider" class="subheader">
        <div class="wrapper">
          <div id="flexslider1_wrap">
            <div id="flexslider1" class="flexslider">
              <ul class="slides">
                <li>
                  <img src="<?php bloginfo('template_directory'); ?>/slides/canyonview_building.jpg"/>
                  <div class="caption">
                    <h3>We want to help you see things differently</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div><!-- /.caption -->
                </li>
                <li>
                  <img src="<?php bloginfo('template_directory'); ?>/slides/canyonview_building.jpg"/>
                  <div class="caption">
                    <h3>We do stuff and it helps people.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div><!-- /.caption -->
                </li>
                <li>
                  <img src="<?php bloginfo('template_directory'); ?>/slides/canyonview_building.jpg"/>
                  <div class="caption">
                    <h3>And some other things about how we do it.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div><!-- /.caption -->
                </li>
              </ul>
            </div><!-- /.flexslider -->
          </div><!-- /#flexslider1_wrap -->
        </div><!-- /.wrapper -->
      </section><!-- /#slider -->
      <section class="content" id="front_page">
        <div class="wrapper">
          <div id="flexslider2" class="flexslider">
            <ul class="slides">
              <li>
                <div class="feature">
                    <h3 class="ribbon"><strong class="ribbon-content"><?php echo of_get_option('service_title_1', 'no entry'); ?></strong></h3>
                    <p><?php echo of_get_option('service_text_1', 'no entry'); ?></p>
                 </div><!-- /.feature -->
                 <div class="feature">
                    <h3 class="ribbon"><strong class="ribbon-content"><?php echo of_get_option('service_title_2', 'no entry'); ?></strong></h3>
                    <p><?php echo of_get_option('service_text_2', 'no entry'); ?></p>
                 </div><!-- /.feature -->
                 <div class="feature">
                    <h3 class="ribbon"><strong class="ribbon-content"><?php echo of_get_option('service_title_3', 'no entry'); ?></strong></h3>
                    <p><?php echo of_get_option('service_text_3', 'no entry'); ?></p>
                 </div><!-- /.feature -->
              </li>
              <li>
                <div class="feature">
                    <h3 class="ribbon"><strong class="ribbon-content"><?php echo of_get_option('service_title_4', 'no entry'); ?></strong></h3>
                    <p><?php echo of_get_option('service_text_4', 'no entry'); ?></p>
                 </div><!-- /.feature -->
                 <div class="feature">
                    <h3 class="ribbon"><strong class="ribbon-content"><?php echo of_get_option('service_title_5', 'no entry'); ?></strong></h3>
                    <p><?php echo of_get_option('service_text_5', 'no entry'); ?></p>
                 </div><!-- /.feature -->
                 <div class="feature">
                    <h3 class="ribbon"><strong class="ribbon-content"><?php echo of_get_option('service_title_6', 'no entry'); ?></strong></h3>
                    <p><?php echo of_get_option('service_text_6', 'no entry'); ?></p>
                 </div><!-- /.feature -->
              </li>

            </ul>
          </div>
        </div><!-- ./wrapper -->
      </section><!-- /.content, /#front_page -->
<?php get_footer(); ?>