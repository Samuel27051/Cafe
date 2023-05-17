      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
   <div class="container">
      <div class="row">
         <h1 class="coffee_taital">OUR Coffee OFFER</h1>
         <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
      </div>
   </div>
   <div class="coffee_section_2">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
               <div class="carousel-item <?php if ($i == 1) echo 'active'; ?>">
                  <div class="container-fluid">
                     <div class="row">
                        <?php for ($j = 1; $j <= 4; $j++) : ?>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-<?php echo $j; ?>.png"></div>
                              <h3 class="types_text">
                                 <?php
                                 if ($j == 1) {
                                    echo 'TYPES OF COFFEE';
                                 } elseif ($j == 2) {
                                    echo 'BEAN VARIETIES';
                                 } elseif ($j == 3) {
                                    echo 'COFFEE & PASTRY';
                                 } elseif ($j == 4) {
                                    echo 'COFFEE TO GO';
                                 }
                                 ?>
                              </h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        <?php endfor; ?>
                     </div>
                  </div>
               </div>
            <?php endfor; ?>
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
         </a>
      </div>
   </div>
</div>
<!-- coffee section end -->