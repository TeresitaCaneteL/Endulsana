<?php

/**
 * Template Name: Pagina Productos
 */

get_header(); ?>
<?php while (have_posts()) : the_post();
  get_template_part('template', 'parts/banner');
  get_template_part('template', 'parts/productos');

endwhile; ?>

<section class="galery">
  <div class="container text-center">
    <?php while (have_posts()) : the_post();
      $titulo = get_the_title();
    endwhile;
    ?>
    <h3 class="text-center"><?php echo $titulo; ?></h3>
    <span class="hr-line mt-0 mb-3"><img src="<?php echo get_template_directory_uri(); ?>/img/separador_green.png" class="img-fluid"></span>
    <div class="row row-cols-3 row-cols-lg-6 g-2 g-lg-1  justify-content-center">

      <div class="col">
        <div class="p-0 p-lg-3">
          <span class="svg-animate">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
              <g>
                <path fill="#73C435" d="M100.062,3.643c-52.915,0-95.97,43.044-95.97,95.969c0,52.913,43.056,95.957,95.97,95.957
          		c52.913,0,95.969-43.044,95.969-95.957C196.031,46.687,152.976,3.643,100.062,3.643z M175.443,98.355
          		c0,41.332-33.581,74.837-75.005,74.837c-41.423,0-75.004-33.506-75.004-74.837c0-41.331,33.581-74.837,75.004-74.837
          		C141.862,23.518,175.443,57.024,175.443,98.355z" />
                <path fill="#73C435" d="M99.611,102.979c0,0-0.028,0-0.044,0c-0.028,0-0.028,0-0.059,0c-22.62,0-41.229-18.109-39.55-39.69
          		c18.878-3.334,38.471,7.623,39.608,26.182c0.913-16.734,17.713-29.174,39.64-26.182C140.622,85.126,122.466,102.808,99.611,102.979
          		z" />
                <path fill="#73C435" d="M134.543,124.029c-13.261-0.796-27.979,5.254-34.757,17.085c-6.829-12.011-21.131-17.593-35.981-17.044
          		c-4.616-8.397-4.513-16.139-4.262-19.469c19.587-2.843,38.667,7.803,39.625,26.195c0.897-16.26,17.021-29.191,39.608-26.195
          		C139.026,107.904,139.13,115.659,134.543,124.029z" />
              </g>
            </svg>
          </span>
          <p>100% Vegan</p>
        </div>
      </div>
      <div class="col">
        <div class="p-0 p-lg-3">
          <span class="svg-animate">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
              <g>
                <g>
                  <g>
                    <g>
                      <g>
                        <path fill="#73C435" d="M99.114,4.076C46.018,4.843,3.438,48.662,4.206,101.759c0.767,53.085,44.586,95.663,97.683,94.897
      						c53.085-0.768,95.664-44.575,94.896-97.672S152.199,3.308,99.114,4.076z M122.818,83.06l3.919-4.155h9.81l23.172-23.845
      						l2.125,3.081c8.383,12.159,12.926,26.383,13.139,41.151c0.602,41.08-32.333,74.97-73.412,75.574
      						c-14.768,0.213-29.123-3.932-41.506-11.959l-3.151-2.042l25.191-25.475H51.271l-9.987,10.282l-2.125-3.081
      						c-8.393-12.147-12.938-26.384-13.15-41.151c-0.59-41.068,32.344-74.97,73.412-75.561c14.78-0.213,29.134,3.919,41.517,11.958
      						l3.141,2.03l-21.26,22.193V83.06z" />
                      </g>
                    </g>
                  </g>
                </g>
                <g>
                  <g>
                    <rect x="116.727" y="96.199" fill="#73C435" width="26.561" height="26.561" />
                  </g>
                </g>
                <g>
                  <g>
                    <polygon fill="#73C435" points="112.844,93.684 112.844,116.904 102.525,127.516 102.526,85.327 118.688,68.352 118.688,87.322
      							" />
                  </g>
                </g>
                <g>
                  <g>
                    <polygon fill="#73C435" points="156.319,110.211 147.43,119.371 147.076,94.912 155.965,85.787 			" />
                  </g>
                </g>
                <g>
                  <g>
                    <polygon fill="#73C435" points="144.09,92.351 119.619,92.351 128.52,82.859 152.955,82.859 			" />
                  </g>
                </g>
                <g>
                  <g>
                    <g>
                      <rect x="54.469" y="87.227" fill="#73C435" width="43.925" height="43.299" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <polygon fill="#73C435" points="115.428,65.424 98.937,83.013 56.724,83.013 73.215,65.424 				" />
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </span>
          <p>0% Azucar</p>

        </div>
      </div>
      <div class="col">
        <div class="p-0 p-lg-3">
          <span class="svg-animate">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
              <g>
                <path fill="#73C435" d="M101.742,6.128c-51.809,0-93.965,42.145-93.965,93.965c0,51.809,42.157,93.953,93.965,93.953
        		s93.965-42.145,93.965-93.953C195.707,48.273,153.551,6.128,101.742,6.128z M175.549,98.862c0,40.468-32.879,73.273-73.438,73.273
        		c-40.558,0-73.438-32.806-73.438-73.273c0-40.468,32.879-73.274,73.438-73.274C142.67,25.588,175.549,58.394,175.549,98.862z" />
                <path fill="#73C435" d="M105.539,145.151c0,0,61.704-33.963,35.404-72.802c-12.848-18.97-37.99-7.123-37.99-7.123
        		S56.195,53.751,52.141,92.77C48.342,129.335,105.539,145.151,105.539,145.151z" />
                <path fill="#FFFFFF" d="M72.762,123.598c-0.772-0.689-0.844-1.861-0.164-2.63c0.215-0.249,0.478-0.423,0.766-0.525
        		c0.621-0.221,1.334-0.1,1.863,0.362l7.903,6.995c0.769,0.679,0.844,1.859,0.164,2.628c-0.68,0.77-1.859,0.844-2.628,0.164
        		L72.762,123.598z" />
                <path fill="#FFFFFF" d="M73.92,70.042c1.404-0.477,2.869-0.849,4.346-1.072c6.477-0.981,12.947,0.64,18.243,4.555
        		c0.981,0.738,1.191,2.122,0.471,3.105c-0.732,0.986-2.108,1.194-3.088,0.468c-4.342-3.209-9.648-4.546-14.961-3.741
        		c-1.219,0.185-2.41,0.48-3.562,0.885c-9.177,3.174-14.769,12.491-13.304,22.154c0.232,1.531,1.299,4.648,5.111,10.85
        		c0.638,1.043,0.318,2.403-0.718,3.044c-1.044,0.653-2.4,0.317-3.039-0.726c-3.417-5.559-5.284-9.648-5.717-12.506
        		C55.918,85.279,62.734,73.923,73.92,70.042z" />
              </g>
            </svg>
          </span>
          <p>100% Amor</p>
        </div>
      </div>
    </div>
    <div class="gallary row">
      <?php eds_query_productos(); ?>

    </div>
</section>

<?php get_footer(); ?>