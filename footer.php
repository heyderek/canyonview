      <footer>
        <div class="wrapper">
          <div id="location">
            <h3>Our Location</h3>
            <address>4309 W 27th Place Ste. B102, Kennewick, WA 99338</address>
            <p>
              <strong>Monday-Wednesday-Thursday:</strong>9am-5pm<br>
              <strong>Tuesday:</strong>9am-6pm<br>
              <strong>Friday:</strong>9am-2pm<br>
            </p>
          </div><!-- /#location -->
          <div id="about">
            <h3>About Us</h3>
            <p><?php echo of_get_option('about_us_text', 'no entry'); ?></p>
          </div><!-- /#about -->
          <div id="credits">
            <p>&copy;2012 Canyon View Family Eye Care.  All Rights Reserved.</p>
          </div><!-- /#credits -->
        </div>
      </footer>
    </div><!-- /#page -->
    <?php wp_footer(); ?>
  </body>
</html>
