<?php get_header(); ?>
      <section id="slider" class="subheader">
        <div class="wrapper">
          <div id="flexslider1_wrap">
            <div id="flexslider1" class="flexslider">
              <ul class="slides">
                <li>
                  <img src="<?php echo of_get_option('slide_image_1', 'no entry'); ?>"/>
                  <div class="caption top-left bg-white">
                    <h3><?php echo of_get_option('slide_title_1', 'no entry'); ?></h3>
                    <?php echo of_get_option('slide_caption_1', 'no entry'); ?>
                  </div><!-- /.caption -->
                </li>
                <li>
                  <img src="<?php echo of_get_option('slide_image_2', 'no entry'); ?>"/>
                  <div class="caption bottom-right bg-white">
                    <h3><?php echo of_get_option('slide_title_2', 'no entry'); ?></h3>
                    <?php echo of_get_option('slide_caption_2', 'no entry'); ?>
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