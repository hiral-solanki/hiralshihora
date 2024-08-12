<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heer-theme
 */

?>

	<footer id="footer">
		<div class="container">
      <h3><?php bloginfo('name'); ?></h3>
      <p><?php bloginfo('description'); ?></p>
      <div class="social-links">
        <a href="https://twitter.com/hiralbsolanki1" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/hiral.v.shihora" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="http://www.instagram.com/hiralshihora" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/hiralshihora" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
        <a href="https://www.github.com/hiral-solanki" class="github" target="_blank"><i class="bx bxl-github"></i></a>
        <a href="https://www.stackoverflow.com/users/22244034/hiral-solanki" class="stack-overflow" target="_blank"><i class="bx bxl-stack-overflow"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span><?php bloginfo('name'); ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
	</footer><!-- #footer -->
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php wp_footer(); ?>

</body>
</html>
