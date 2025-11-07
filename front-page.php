<?php get_header(); ?>


<div id="container">
  <div id="inner_container">
    <div id="imgs_container">
      <div class="img_container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/essence.webp" alt="Slide 1">
      </div>
      <div class="img_container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/7.webp" alt="Slide 2">
      </div>
      <div class="img_container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/5.webp" alt="Slide 3">
      </div>
    </div>

    <div id="overlay">
      <div id="left_button" class="overlay_button">&#10094;</div>
      <div id="right_button" class="overlay_button">&#10095;</div>
    </div>
  </div>
</div>


<div style="text-align:center" class="slider-dots">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="hero">
                <div class="container">
                    <h1>Welcome to Essence Cosmetics</h1>
                    <p>Discover affordable and bold beauty products designed to express your beauty.</p>
                </div>
            </section>

            <section class="services">
                <h2>What We Offer</h2>
                <p>At Essence Cosmetics, we offer everything you need to elevate your beauty routine and stay inspired, such as: </p>
                <ul>
                    <li>✅ Make Up</li>
                    <li>✅ Skincare</li>
                    <li>✅ Step-by-step makeup tutorials</li>
                </ul>
                <div class="container">
                    <div class="services-item">
                        <?php if ( is_active_sidebar( 'services-1' ) ) { dynamic_sidebar( 'services-1' ); } ?>
                    </div>
                    <div class="services-item">
                        <?php if ( is_active_sidebar( 'services-2' ) ) { dynamic_sidebar( 'services-2' ); } ?>
                    </div>
                    <div class="services-item">
                        <?php if ( is_active_sidebar( 'services-3' ) ) { dynamic_sidebar( 'services-3' ); } ?>
                    </div>
                </div>
            </section>

            <section class="home-blog">
                <h2>Latest Beauty Picks </h2>
                <div class="products">
    <div class="product">
      <img src="<?php echo get_template_directory_uri(); ?>/images/8.jpg" alt="Lash Princess False Lash Mascara">
      <h3>lash princess<br>false lash<br>mascara</h3>
      <p class="price">$ 4.99</p>
    </div>

    <div class="product">
      <img src="<?php echo get_template_directory_uri(); ?>/images/9.jpg"alt="I Love Extreme Crazy Volume Mascara">
      <h3>i love extreme<br>crazy volume<br>mascara</h3>
      <p class="price">$ 4.99</p>
    </div>
  </div>
</section>
        
     </section>

        </main>
    </div>
</div>

<?php get_footer(); ?>