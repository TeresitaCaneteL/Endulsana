 <!---footer-->
 <footer class="footer ">
   <div class="redes-sociales bg-green">
     <div class="container py-2 ">
       <div class="row justify-content-md-center ">

         <div class="col-12 ">
           <div class="main-menu-right">
             <ul class="menu-right-list">

                 <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>

             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>


   <div class="bs-footer">
     <div class="container">
       <div class="container-footer">
         <div class="row justify-content-center align-items-center flex-row">
           <div class="col-xl-3 col-md-3 logo">
             <a href="<?php echo esc_url(home_url('/')) ?>" class="navbar-brand">
               <img src="<?php echo get_template_directory_uri(); ?>/img/endulsana-logo.png" alt="" class="img-fluid d-block">
             </a>
           </div>

           <div class="col-xl-9 col-12 col-md-9 footer-column mt-3 text-center">
             <!--<div class="main-navbar ">
                <ul>
                  <li><a href="nosotros.html" class="nav-link">Nosotros</a></li>
                  <li><a href="blog.html" class="nav-link">Blog</a></li>
                  <li><a href="galeria.html" class="nav-link">Galería</a></li>
                  <li><a href="contacto.html" class="nav-link">Contacto</a></li>
                </ul>
              </div>-->
             <?php
              $args = array(
                'menu_class' => 'nav nav-justified flex-column flex-md-row justify-content-end',
                'container_class'  => 'main-navbar',
                'theme_location' => 'menu_principal',
              );
              wp_nav_menu($args)
              ?>

           </div>

           <span class="text-center text-white py-2">© Endulsana <?php echo date('Y'); ?>. Todos los Derechos Reservados</span>
         </div>
       </div>
     </div>
   </div>
 </footer>
 <!---end-footer-->

 <?php wp_footer(); ?>
 </body>

 </html>