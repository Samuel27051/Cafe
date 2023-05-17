<?php
    include('partials/header.php');
  ?>
      <?php
    include('partials/coffees.php');
      ?>
      <?php
    include('partials/about.php');
      ?>
 <!-- client section start -->
<div class="client_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="about_taital">What says customers</h1>
            <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
         </div>
      </div>
      <div class="client_section_2">
         <?php
         $clients = [
            [
               'name' => 'Joy Moark',
               'image' => 'images/client-img1.png',
               'testimonial' => "Now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Now use Lorem Ipsum as their default model text.",
            ],
            [
               'name' => 'Mihacal',
               'image' => 'images/client-img2.png',
               'testimonial' => "Now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Now use Lorem Ipsum as their default model text.",
            ],
            [
               'name' => 'Uliya den',
               'image' => 'images/client-img3.png',
               'testimonial' => "Now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Now use Lorem Ipsum as their default model text.",
            ],
         ];
         foreach ($clients as $client) :
         ?>
            <div class="client_taital_main">
               <div class="client_left">
                  <div class="client_img"><img src="<?php echo $client['image']; ?>"></div>
               </div>
               <div class="client_right">
                  <h3 class="moark_text"><?php echo $client['name']; ?></h3>
                  <p class="client_text"><?php echo $client['testimonial']; ?></p>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>
<!-- client section end -->

      <!-- blog section start -->
      <?php
    include('partials/blog.php');
      ?>
      <!-- blog section end -->
      <!-- contact section start -->
      <?php
    include('partials/contact.php');
      ?>
      <!-- contact section end -->
      <?php
    include('partials/footer.php');
      ?>