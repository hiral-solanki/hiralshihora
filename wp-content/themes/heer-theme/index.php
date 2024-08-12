<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package heer-theme
 */
get_header();
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
     <?php
      $content = get_post_content('page','home');
       echo $content; 
     ?> 
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </path></defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </use></g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </use></g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </use></g>
    </svg>

  </section>

  <!-- ======= Hero Section ======= -->

	<main id="main" class="site-main">
<!-- ======= About Section ======= -->
<section id="about" class="about">
<?php
      $content = get_post_content('page','about');
       echo $content; 
     ?> 
   
</section><!-- End About Section -->
<section id="services" class="features">
<div class="container">

<?php
      $content = get_post_content('page','services');
       echo $content; 
     ?> 
</div>
</section><!-- End Services Section -->

<!-- ======= cta Section ======= -->
<section id="cta" class="cta">
  <div class="container">

    <div class="row" data-aos="zoom-out">
      <div class="col-lg-9 text-center text-lg-start">
        <h3>Ready for Innovation?</h3>
        <p>Together we achieve more and grow your business.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#contact">Get in touch</a>
      </div>
    </div>

  </div>
</section><!-- End cta Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title" data-aos="zoom-out">
      <h2>Contact</h2>
      <p>Get in touch</p>
    </div>

    <div class="row mt-5">

      <div class="col-lg-4" data-aos="fade-right">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Pune, India</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p><?php echo bloginfo('admin_email');?></p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+91 99798 57202</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

        <form action="<?php echo get_template_directory_uri();?>/forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
          <div class="my-3">
            <div class="text-danger">Please fill all required field marked as *</div>
          </div>
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name *" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email *" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject *" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message *" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();