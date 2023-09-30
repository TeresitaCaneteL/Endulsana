 <section id="slider-section" class="slider-section">

   <?php
    $items = get_post_meta(get_the_ID(), 'eds_slider_slider', true);
    foreach ($items as $item) {
    ?>
     <div id="home-slider" class="home-slider owl-carousel owl-theme">
       <div class="item">
         <img src="<?php echo $item['image_slider'] ?>" alt="">
         <div class="main-slider">
           <div class="main-table">
             <div class="main-table-cell">
               <div class="container">
                 <div class="main-content text-center py-0 py-lg-5">
                   <h3 data-animation="fadeInUp " data-delay="delay-2s" style="color:#ed4c16"><?php echo $item['titulo_item'] ?></h3>


                   <span data-animation="fadeInUp" data-delay="200ms" class="hr-line"><img src="<?php echo get_template_directory_uri(); ?>/img/separador_green.png"></span>
                   <h4 data-animation="slideInUp" data-delay="180ms" style="color:#b1f58e">
                     <?php echo $item['description'] ?>
                   </h4>

                   <p data-animation="fadeInUp" data-delay="500ms">
                     <?php echo $item['slogan'] ?>
                   </p>
                   <a data-animation="fadeInUp" data-delay="800ms" href="#" class="btn btn-bd-primary" data-text="Ver mas">
                     <span>Ver mas</span>
                   </a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     <?php } ?>

     </div>
 </section>