  <!-- info section -->

  <?php
  $background_image_url = get_post_meta(get_the_ID(), 'eds_banner_imagen_banner', true);
  $titulo_banner = get_post_meta(get_the_ID(), 'eds_banner_titulo_banner', true);
  $texto_banner = get_post_meta(get_the_ID(), 'eds_banner_parrafo_banner', true);
  ?>
  <section class="info_section layout_padding" style="background-image: url('<?php echo esc_url($background_image_url); ?>');">
    <div class=" layout_padding-top layout_padding2-bottom">
      <div class="logo-box">
        <a href="index.html">
          <img src="images/info-logo.png" alt="">
        </a>
      </div>
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="img" alt="" />
            </div>
            <div class="detail-box">
              <h2><?php echo $titulo_banner; ?></h2>
              <p>
                <?php echo $texto_banner; ?>
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>