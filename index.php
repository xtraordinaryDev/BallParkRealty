<?php
$title = 'Real Estate Agent | Lakeville Real Estate Agents';
$description = 'Lakeville Real Estate Agents - Save Thousands with our 4.5% Listing Rate! List your home with Ballpark Realtors in Lakeville, MN, start saving thousands of dollars. We have the best real estate listing fee anywhere around the Lakeville, MN area. Call (952) 431-1930 and speak to one of our real estate agents for information about listing your home with Ballpark Realtors.';
$keywords = 'Lakeville mn,Lakeville,Lakeville Realtors,Lakeville real estate,Lakeville real estate,Lakeville real estate brokers,listing fee,list home for sale in Lakeville';
$city = 'Lakeville';
$url = 'index';

include('includes/header.php');
include('includes/nav.php');

$reviews = [];
$api_key = 'AIzaSyCqG1WV516w2xipqUuN_mWR7KtUTX3DYZY';
$place_id = 'ChIJP-aQl2o39ocRukDPOb51oEQ'; // You can find this in the URL when you view your business on Google Maps

$api_url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id&fields=name,rating,reviews&key=$api_key";


$response = file_get_contents($api_url);
$data = json_decode($response, true);

if (isset($data['result']['reviews'])) {
  $reviews = $data['result']['reviews'];
}
?>

<!-- == main content area starts == -->
<div id="dtr-main-content">

  <!-- hero section starts -->
  <section id="home">
    <!-- <div class="hero-section-wrapper d-flex sm-flex-column sm-content-center">
      <div class="d-flex flex-column justify-content-between hero-container sm-hero-container hero-text-container">
        <div class="hero-heading">Swing Big and Save<br>Thousands<br>With Our 4.5% Listing<br>Rate!</div>
        <div class="d-flex justify-content-between align-items-center">

          <ul class="top-section-list dtr-mt-30 c-white">
            <li class="d-flex align-items-center">
              <img src="https://ballparkrealtymn.com/new-design-assets/icons/checkmark.svg">
              <div>We Can Help You Save</div>
            </li>
            <li class="d-flex align-items-center">
              <img src="https://ballparkrealtymn.com/new-design-assets/icons/checkmark.svg">
              <div>We Build Relationships</div>
            </li>
            <li class="d-flex align-items-center">
              <img src="https://ballparkrealtymn.com/new-design-assets/icons/checkmark.svg">
              <div>We Are Experienced</div>
            </li>
          </ul>

          <img class="hero-image-2" src="https://ballparkrealtymn.com/new-design-assets/images/hero-section-2.png">
        </div>
      </div>
      <div class="hero-container d-flex flex-column justify-content-between sm-hero-container">
        <img src="https://ballparkrealtymn.com/new-design-assets/images/hero-section-1.png" width="100%" height="82%">
        <a href="https://ballparkrealtymn.idxbroker.com/idx/search/advanced" class="p-link hero-link">Search For Properties</a>
      </div>
    </div> -->
    <div class="wos-banner sm-hidden">
      <a href="href=#contact-us"><img src="img/banner.jpg" /></a>
    </div><!-- .wos-banner -->
    <div class="wos-banner sm-visible">
      <a href="href=#contact-us"><img src="img/banner-mobile.jpg" /></a>
    </div><!-- .wos-banner -->
  </section>
  <!-- hero section ends -->

  <section id="meet-the-team" class="pb-100">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <div class="container section-header mb-4">Meet The Team</div>
    <!--<div id="MeetTeam"class = "container">
      <div id="idxStart"></div>
      <div id="idxStop"></div>
    </div> -->

    <!-- variation 2 -->
    <link rel="stylesheet" type="text/css" href="css/variation2.css">
    <div class="container">
      <div class="space">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-6 custom-w-100">
            <div class="wos-team-box2">
              <div class="wos-team-box-image2">
                <a href="#"><img src="new-design-assets/images/team1.jpeg"></a>
              </div>
              <div class="wos-team-box-body2">
                <h3><a href="mailto: sean@ballparkrealtymn.com">Sean McKamie</a></h3>
                <div class="wos-team-box-phone2">
                  <p>Cell Phone <span><br><a href="tel:612-910-1501">612-910-1501</a></span></p>
                </div>

                <div class="wos-team_infobox2">
                  <a href="mailto: name@email.com"><i class="fa-regular fa-envelope"></i> Contact Sean</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-6 custom-w-100">
            <div class="wos-team-box2">
              <div class="wos-team-box-image2">
                <a href="#"><img src="new-design-assets/images/team2.jpeg"></a>
              </div>
              <div class="wos-team-box-body2">
                <h3><a href="#">Katie Knight</a></h3>
                <div class="wos-team-box-phone2">
                  <p>Cell Phone <span><br><a href="tel:612-710-8933">612-710-8933</a></span></p>
                </div>

                <div class="wos-team_infobox2">
                  <a href="mailto: Katie@Ballpearkrealty.com"><i class="fa-regular fa-envelope"></i> Contact Katie</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-6 custom-w-100">
            <div class="wos-team-box2">
              <div class="wos-team-box-image2">
                <a href="#"><img src="new-design-assets/images/team3.jpeg"></a>
              </div>
              <div class="wos-team-box-body2">
                <h3><a href="#">Bryon Lindsey</a></h3>
                <div class="wos-team-box-phone2">
                  <p>Cell Phone <span><br><a href="tel:952-500-3607">952-500-3607</a></span></p>
                </div>

                <div class="wos-team_infobox2">
                  <a href="mailto: Byron@Ballparkrealtymn.com"><i class="fa-regular fa-envelope"></i> Contact Bryon</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-6 custom-w-100">
            <div class="wos-team-box2">
              <div class="wos-team-box-image2">
                <a href="#"><img src="new-design-assets/images/team4.jpeg"></a>
              </div>
              <div class="wos-team-box-body2">
                <h3><a href="mailto: Stacey@Ballparkrealtymn.com">Stacey Key</a></h3>
                <div class="wos-team-box-phone2">
                  <p>Cell Phone <span><br><a href="tel:763-242-0974">763-242-0974</a></span></p>
                </div>

                <div class="wos-team_infobox2">
                  <a href="#"><i class="fa-regular fa-envelope"></i> Contact Stacey</a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 col-6 custom-w-100">
            <div class="wos-team-box2">
              <div class="wos-team-box-image2">
                <a href="#"><img src="new-design-assets/images/team5.jpeg"></a>
              </div>
              <div class="wos-team-box-body2">
                <h3><a href="#">Jake Wypyszynski</a></h3>
                <div class="wos-team-box-phone2">
                  <p>Cell Phone <span><br><a href="tel:608-658-6994">608-658-6994</a></span></p>
                </div>

                <div class="wos-team_infobox2">
                  <a href="mailto: Jake@Ballparkrealtymn.com"><i class="fa-regular fa-envelope"></i> Contact Jake</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>




  <!-- google review section starts -->
  <section id="reviews" class="review-section container pb-100">
    <div class="section-header mb-4">Reviews</div>

    <div class="d-flex justify-content-end mb-5">
      <a href="https://g.page/r/CbpAzzm-daBEEB0/review" target="_blank" class="p-link">Add Google Review</a>
    </div>

    <div class="d-flex justify-content-evenly flex-wrap gap-5">
      <!-- <?php foreach ($reviews as $review) : ?>

      <?php endforeach; ?> -->
      <div class="review-box">
        <div class="box-header d-flex gap-3 mb-3 align-items-center">
          <img class="logo-img" src="https://lh3.googleusercontent.com/a/ACg8ocK_7KRAILk9nzaBearmiRXK8GCH753dQkdGVgXZHCki0ZC9Ug=w120-h120-p-rp-mo-br100" alt="Avatar">
          <div class="review-info flex-grow-1">
            <div class="author-name c-black">Xavier Thurman</div>
            <div class="review-time"> a year ago </div>
          </div>
          <img class="platform-img" src="https://ballparkrealtymn.com/new-design-assets/icons/google-icon.png" alt="Google">
        </div>
        <div class="box-body">
          <div class="review-starts mb-2">
            <?php
            for ($index = 0; $index < 5; $index++) {
              $currentRatingIndex = 5 - $index;
              if ($currentRatingIndex >= 1) {
                echo "<i class='fa-solid fa-star' style='color: #ffa500'></i>";
              } else if ($currentRatingIndex > 0 && $currentRatingIndex < 1) {
                echo "<i class='fa-regular fa-star-half-stroke' style='color: #ffa500'></i>";
              } else {
                echo "<i class='fa-regular fa-star'></i>";
              }
            }
            ?>
          </div>

          <div>
            <input class="hidden-input" type="checkbox" id="a year ago">
            <div class="review-description">I had Sean as my realtor and he was amazing! As a first time Home Buyer there are a lot of uncertainty and unknowns. Sean was super helpful informing me and providing me with the correct information so that buying my first home was an extraordinary experience!</div>
            <label for="a year ago" role="button">See more</label>
          </div>
        </div>
      </div>


      <div class="review-box">
        <div class="box-header d-flex gap-3 mb-3 align-items-center">
          <img class="logo-img" src="https://lh3.googleusercontent.com/a/ACg8ocJLiqbSTNmtA8qj7CblpC7eqMicvvI3rDK_g4auqf4ORAlzdg=w66-h66-p-rp-mo-br100" alt="Avatar">
          <div class="review-info flex-grow-1">
            <div class="author-name c-black">Suzanne Skokanek</div>
            <div class="review-time">3 months ago</div>
          </div>
          <img class="platform-img" src="https://ballparkrealtymn.com/new-design-assets/icons/google-icon.png" alt="Google">
        </div>
        <div class="box-body">
          <div class="review-starts mb-2">
            <?php
            for ($index = 0; $index < 5; $index++) {
              $currentRatingIndex = 5 - $index;
              if ($currentRatingIndex >= 1) {
                echo "<i class='fa-solid fa-star' style='color: #ffa500'></i>";
              } else if ($currentRatingIndex > 0 && $currentRatingIndex < 1) {
                echo "<i class='fa-regular fa-star-half-stroke' style='color: #ffa500'></i>";
              } else {
                echo "<i class='fa-regular fa-star'></i>";
              }
            }
            ?>
          </div>

          <div>
            <input class="hidden-input" type="checkbox" id="3 months ago">
            <div class="review-description">We had Sean as our realtor and could not be happier. By following his advice our home sold in one day!! for way above asking!!
              We feel that He worked for us as friends and not just a commission.</div>
            <label for="3 months ago" role="button">See more</label>
          </div>
        </div>
      </div>


      <div class="review-box">
        <div class="box-header d-flex gap-3 mb-3 align-items-center">
          <img class="logo-img" src="	https://lh3.googleusercontent.com/a-/ALV-UjVCcAvaKue-hvaaDyJmCdEW79M4U8PHAR6_jlEPZebh2qoJso2Lcw=w66-h66-p-rp-mo-br100" alt="Avatar">
          <div class="review-info flex-grow-1">
            <div class="author-name c-black">Holly Audet</div>
            <div class="review-time">2 years ago</div>
          </div>
          <img class="platform-img" src="https://ballparkrealtymn.com/new-design-assets/icons/google-icon.png" alt="Google">
        </div>
        <div class="box-body">
          <div class="review-starts mb-2">
            <?php
            for ($index = 0; $index < 5; $index++) {
              $currentRatingIndex = 5 - $index;
              if ($currentRatingIndex >= 1) {
                echo "<i class='fa-solid fa-star' style='color: #ffa500'></i>";
              } else if ($currentRatingIndex > 0 && $currentRatingIndex < 1) {
                echo "<i class='fa-regular fa-star-half-stroke' style='color: #ffa500'></i>";
              } else {
                echo "<i class='fa-regular fa-star'></i>";
              }
            }
            ?>
          </div>

          <div>
            <input class="hidden-input" type="checkbox" id="2 years ago">
            <div class="review-description">We had such an amazing experience, I don't even know where to start! Our agent, Shawna, was not only extremely helpful, flexible with us, and helped us find the house of our dreams, but she's so also such a kind and genuine person!

              Shawna cleared up any confusing aspects of the buying and selling process. She was with us every step of the way! Thank you so much Shawna and Ballpark Realty. We couldn't be happier with our experience and our family is so grateful.</div>
            <label for="2 years ago" role="button">See more</label>
          </div>
        </div>
      </div>

      <div class="review-box">
        <div class="box-header d-flex gap-3 mb-3 align-items-center">
          <img class="logo-img" src="https://lh3.googleusercontent.com/a/ACg8ocKm8x1NQYS_mkGCt-YDpRayVu7KxhZIcXJRBSwhOWxjR55NvQ=w66-h66-p-rp-mo-br100" alt="Avatar">
          <div class="review-info flex-grow-1">
            <div class="author-name c-black">Justin Metz</div>
            <div class="review-time">11 months ago</div>
          </div>
          <img class="platform-img" src="https://ballparkrealtymn.com/new-design-assets/icons/google-icon.png" alt="Google">
        </div>
        <div class="box-body">
          <div class="review-starts mb-2">
            <?php
            for ($index = 0; $index < 5; $index++) {
              $currentRatingIndex = 5 - $index;
              if ($currentRatingIndex >= 1) {
                echo "<i class='fa-solid fa-star' style='color: #ffa500'></i>";
              } else if ($currentRatingIndex > 0 && $currentRatingIndex < 1) {
                echo "<i class='fa-regular fa-star-half-stroke' style='color: #ffa500'></i>";
              } else {
                echo "<i class='fa-regular fa-star'></i>";
              }
            }
            ?>
          </div>

          <div>
            <input class="hidden-input" type="checkbox" id="11 months ago">
            <div class="review-description">My realtor Sean was top notch !! I am a first-time home buyer and he was there every step of the way. The questions that i had were answered and he explained everything in terms that i could understand. I will be using him again in the future and i would recommend Sean and Ballpark realty to anyone looking for a home.</div>
            <label for="11 months ago" role="button">See more</label>
          </div>
        </div>
      </div>


      <div class="review-box">
        <div class="box-header d-flex gap-3 mb-3 align-items-center">
          <img class="logo-img" src="https://lh3.googleusercontent.com/a/ACg8ocJdwOFW-JGAButf6tw56VXXqVQpzX-wWep5PtLU1PFxBQ-XXg=w66-h66-p-rp-mo-br100" alt="Avatar">
          <div class="review-info flex-grow-1">
            <div class="author-name c-black">Somsakoun Manivanh</div>
            <div class="review-time">a year ago</div>
          </div>
          <img class="platform-img" src="https://ballparkrealtymn.com/new-design-assets/icons/google-icon.png" alt="Google">
        </div>
        <div class="box-body">
          <div class="review-starts mb-2">
            <?php
            for ($index = 0; $index < 5; $index++) {
              $currentRatingIndex = 5 - $index;
              if ($currentRatingIndex >= 1) {
                echo "<i class='fa-solid fa-star' style='color: #ffa500'></i>";
              } else if ($currentRatingIndex > 0 && $currentRatingIndex < 1) {
                echo "<i class='fa-regular fa-star-half-stroke' style='color: #ffa500'></i>";
              } else {
                echo "<i class='fa-regular fa-star'></i>";
              }
            }
            ?>
          </div>

          <div>
            <input class="hidden-input" type="checkbox" id="a year ago">
            <div class="review-description">Angie helped my Family and I find the perfect home. We couldn't be happier. The process went by fast. thank you so much! we love our new home </div>
            <label for="a year ago" role="button">See more</label>
          </div>
        </div>
      </div>
    </div>




<div class="d-flex justify-content-center mt-5">
  <a href="https://www.google.com/localservices/prolist?spp=CgsvZy8xdGQwejBscQ%3D%3D&src=2&slp=UhMIARIPEg0iCy9nLzF0ZDB6MGxx#ts=3" target="_blank" class="p-link">See All Reviews</a>
  <!-- <a href="https://www.google.com/maps/place/Ballpark+Realty/@44.7104748,-93.2397593,17z/data=!4m8!3m7!1s0x87f6376a9790e63f:0x44a075be39cf40ba!8m2!3d44.7104748!4d-93.2397593!9m1!1b1!16s%2Fg%2F1td0z0lq?entry=ttu" target="_blank" class="p-link">See All Reviews</a> -->
</div>
</section>
<!-- google review section ends -->

<!-- save thousands section starts -->
<section id="about" class="dtr-section pb-100">
  <div class="container">
    <div class="row px-5 sm-px">

      <div class="col-12 col-md-6 small-device-space sm-no-pr" style="padding-right: 25px">
        <div class="dtr-video-wrapper dtr-video-center dtr-video-btn-white h-100 dtr-xl-rounded" style="background-image: url(https://ballparkrealtymn.com/bizops/assets/images/img-4.jpg);">
          <a class="dtr-video-popup dtr-video-button vbox-item" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=NRu3h0Rp1L4"><span class="dtr-video-button-inner"></span><span class="dtr-border-animation dtr-border-1"></span> <span class="dtr-border-animation dtr-border-2"></span> <span class="dtr-border-animation dtr-border-3"></span>
          </a>
        </div>
      </div>

      <div class="col-12 col-md-6" style="padding-left: 25px">
        <div class="blank-space-right">
          <h2 class="c-black">Save Thousands<br>with our 4.5% Listing<br>Rate!
          </h2>
          <p class="color-dark sm-text-align-justify" style="font-size: 16px; line-height: 1.5rem;">Having a well-thought-out strategy is essential in any endeavor, whether playing
            baseball or buying or selling a house. To help our clients make informed decisions, Ballpark Realty
            focuses on providing them with the expertise and knowledge they need. <br>
            It shouldn't cost you more to have a great real estate experience, whether you're
            buying or selling. Compared to the industry average of 6%, Ballpark Realty's listing rate is 4.5%, which
            means that the profits you earn you keep. </p>
          <p class="dtr-mt-40 color-dark" style="font-size: 16px; line-height: 1.5rem;">To speak to representative, call <a href="tel:1-952-431-1930"><span class="font-weight-bold c-blue">952-431-1930</span></a>. We're here to answer any question you
            may have.</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- save thousands section ends -->

<!-- search sale section starts -->
<section id="savings" class="dtr-section pb-100">
  <div class="container">
    <div class="row px-5 sm-px sm-column-reverse">

      <div class="col-12 col-md-4 d-flex align-items-center">
        <div class="blank-space-right sm-mb-2">
          <h3 class="c-black">Find Properties<br>For Sale
          </h3>
          <p class="color-dark me-3 mb-4 sm-no-mr sm-text-align-justify" style="font-size: 16px; line-height: 1.5rem;">
            From our energetic team and an outside-the-box approach to real estate, we coach you every step of the way.
          </p>
          <a href="#contact-us" class="p-link">Find Properties</a>
        </div>
      </div>

      <div class="col-12 col-md-6 offset-md-1 sm-mb-2">
        <div>
          <img src="https://ballparkrealtymn.com/new-design-assets/images/search-sale-properties.png" style="width: 675px" alt="image" class="dtr-xl-rounded-img">
        </div>
      </div>

    </div>
  </div>
</section>
<!-- search sale section ends -->

<!-- sell your property section starts -->
<section class="dtr-section pb-100">
  <div class="container">
    <div class="row px-5 sm-px">

      <div class="col-12 col-md-5">
        <div>
          <img src="https://ballparkrealtymn.com/new-design-assets/images/sell-your-property.png" alt="image" class="dtr-xl-rounded-img">
        </div>
      </div>

      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <div style="max-width: 60%" class="sm-no-max-width">
          <h3 class="c-black">Sell Your Property
          </h3>
          <p class="color-dark me-3 mb-4 sm-text-align-justify" style="font-size: 16px; line-height: 1.5rem;">
            Save with our 4.5% Listing Fee! We keep our overhead low and our competence high in order to assist you in winning.
          </p>
          <a href="#contact-us" class="p-link">Sell Your Property</a>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- sell your property section ends -->

<!-- let us help you save section starts -->
<!-- <section class="dtr-section pb-100">
  <div class="container">
    <h6 class="c-blue">Let Us Help You Save</h6>
  </div>
</section> -->
<!-- let us help you save section ends -->

<!-- let us help you save section starts -->
<section id="contact-us" class="container dtr-section pb-100">
  <div class="section-header mb-4">Contact Us</div>
  <div class="contact-us-wrapper d-flex flex-wrap gap-5">
    <div class="form flex-grow-1 pe-5">
      <p class="c-blue contact-us-title">Contact Us</p>
      <h3>Send A Message</h3>
      <p class="standard-paragraph mb-5">Fill out the form and our team will get back to you as soon as possible.</p>
      <form action="#">
        <input type="text" name="email" placeholder="Your E-Mail" class="mb-4">
        <input type="text" name="phone" placeholder="Phone Number" class="mb-4">
        <textarea name="message" id="" cols="30" rows="6" placeholder="Your Message" class="mb-4"></textarea>
        <button type="submit" class="p-button">Submit Now</button>
      </form>
    </div>

    <div class="get-in-touch">
      <h3>Get in Touch</h3>
      <p class="standard-paragraph c-lgrey mb-5 sm-mb-4">Contact us to sell or find your dream home</p>
      <hr class="mb-5 sm-mb-4">
      <div class="d-flex align-items-center gap-5 mb-5">
        <div class="icon-wrapper sm-icon-wrapper">
          <img src="https://ballparkrealtymn.com/new-design-assets/icons/location.svg">
        </div>
        <div>
          <div class="git-title">Visit Us:</div>
          <p class="standard-paragraph c-lgrey">We Sell All Across The Twin Cities!</p>
        </div>
      </div>

      <div class="d-flex align-items-center gap-5 mb-5">
        <div class="icon-wrapper sm-icon-wrapper">
          <img src="https://ballparkrealtymn.com/new-design-assets/icons/email.svg">
        </div>
        <div>
          <div class="git-title">Mail Us:</div>
          <p class="standard-paragraph c-lgrey">info@ballparkrealtymn.com</p>
        </div>
      </div>

      <div class="d-flex align-items-center gap-5">
        <div class="icon-wrapper sm-icon-wrapper">
          <img src="https://ballparkrealtymn.com/new-design-assets/icons/phone.svg">
        </div>
        <div>
          <div class="git-title">Phone Us:</div>
          <p class="standard-paragraph c-lgrey">(952) 431-1930</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- let us help you save section ends -->

</div>
<!-- == main content area ends == -->

<?php include('includes/footer.php'); ?>

<script src="https://ballparkrealtymn.com/bizops/assets/js/jquery.min.js"></script>
<script src="https://ballparkrealtymn.com/bizops/assets/js/bootstrap.min.js"></script>
<script src="https://ballparkrealtymn.com/bizops/assets/js/plugins.js"></script>
<script src="https://ballparkrealtymn.com/bizops/assets/js/custom.js"></script>