<footer class="site-footer">
    <div class="container">

        <div class="site-info">
            <p>
                <?php 
                echo esc_html( get_theme_mod( 
                    'essence_copyright_text', 
                    'Copyright © ' . date( 'Y' ) . ' Essence - All Rights Reserved' 
                ) ); 
                ?>
            </p>
        </div><!-- .site-info -->

        <?php if ( has_nav_menu( 'wp_devs_footer_menu' ) ) : ?>
            <nav class="footer-menu" aria-label="<?php esc_attr_e( 'Footer Menu', 'essence' ); ?>">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'wp_devs_footer_menu',
                        'depth'          => 1,
                        'container'      => false,
                        'menu_class'     => 'footer-nav',
                    ) );
                ?>
            </nav>
        <?php endif; ?>

    </div><!-- .container -->
</footer><!-- .site-footer -->

</div><!-- Closing wrapper or site div, if any -->

<?php wp_footer(); ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const imgsContainer = document.getElementById('imgs_container');
  const slides = document.querySelectorAll('.img_container');
  const next = document.getElementById('right_button');
  const prev = document.getElementById('left_button');
  let index = 0;

  function showSlide(i) {
    if (i >= slides.length) index = 0;
    if (i < 0) index = slides.length - 1;
    imgsContainer.style.transform = `translateX(-${index * 100}%)`;
  }

  next.addEventListener('click', () => {
    index++;
    showSlide(index);
  });

  prev.addEventListener('click', () => {
    index--;
    showSlide(index);
  });
});
</script>

</body>
</html>