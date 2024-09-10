<?php 
$title = '1';
$description = '2';
$keywords = '3';
$city = '4';
$url = '5';

include ('includes/header.php');
include ('includes/nav.php');
?>

    <!-- == main content area starts == -->
    <div id="dtr-main-content">

        <!-- hero section starts
================================================== -->
        <section id="home" class="dtr-section dtr-section-with-bg dtr-hero-section-top-padding" style="background-image: url(https://ballparkrealtymn.com/bizops/assets/images/hero-img2.jpg);">
            <!-- overlay -->
            <div class="dtr-overlay dtr-overlay-white"></div>
            <div class="dtr-dotted-bg z-index">
                <div class="container dtr-py-100 dtr-overlay-content">

                    <!--== row starts ==-->
                    <div class="row d-flex align-items-center">

                        <!--== column 1 starts ==-->
                        <div class="col-12 col-md-6">
                            <h3 class="dtr-mb-5">Save Thousands</h3>
                            <h1 class="color-red">With Our 4.5% Listing Rate!</h1>

                            <!-- list starts -->
                            <ul class="dtr-list-styled dtr-mt-30 color-dark">
                                <li><img src="https://ballparkrealtymn.com/bizops/assets/images/checkmark.svg" alt="image">We Can Help You Save</li>
                                <li><img src="https://ballparkrealtymn.com/bizops/assets/images/checkmark.svg" alt="image">We Build Relationships </li>
                                <li><img src="https://ballparkrealtymn.com/bizops/assets/images/checkmark.svg" alt="image">We Are Experienced</li>
                            </ul>
                            <!-- list ends -->

                        </div>
                        <!--== column 1 ends ==-->

                        <!--== column 2 starts ==-->
                        <div class="col-12 col-md-6 small-device-space">
                            <div class="dtr-small-box dtr-rounded blank-space-left bg-red">

                                <!-- heading -->
                                <h3 class="text-center color-white">Start Saving Now!</h3>

                                <!-- form starts -->
                                <div class="dtr-form">
                                    <form id="contactform" method="post" action="https://ballparkrealtymn.com/bizops/php/contact-form.php">
                                        <fieldset>
                                            <!-- form two columns start -->
                                            <div class="dtr-form-row dtr-form-row-2col clearfix">
                                                <div class="dtr-form-column">
                                                    <p class="dtr-form-field">
                                                        <input name="name"  type="text" placeholder="First Name">
                                                    </p>
                                                </div>
                                                <div class="dtr-form-column">
                                                    <p class="dtr-form-field">
                                                        <input name="lastname"  type="text" placeholder="Last Name">
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- form two columns ends -->
                                            <p class="dtr-form-field">
                                                <input name="email"  class="required email" type="text" placeholder="Email Address">
                                            </p>
                                            <p class="dtr-form-field">
                                                <input name="phone"  type="text" placeholder="Phone Number">
                                            </p>
                                            <p class="dtr-form-field">
                                                <input name="zip"  type="number" placeholder="Zip Code">
                                            </p>
                                            <p class="antispam">Leave this empty: <br />
                                                <input name="url" />
                                            </p>
                                            <p><script src="https://www.google.com/recaptcha/enterprise.js?render=6LeFGwsjAAAAAP0RwawKPgftSluQHUtQ0eA_B0Yo"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LeFGwsjAAAAAP0RwawKPgftSluQHUtQ0eA_B0Yo', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>

                                                <button class="dtr-btn dtr-btn-rounded btn-dark dtr-btn-right-icon w-100" type="submit"> <span class="btn-text">Click Here Now</span><i class="icon-paper-plane"></i></button>
                                            </p>
                                            <div id="contactresult"></div>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- form ends -->

                                <!-- infoline -->
                                <p class="dtr-infoline color-white dtr-mt-10">Your information is protected by Ballpark Realty.</p>
                            </div>
                        </div>
                        <!--== column 2 ends ==-->

                    </div>
                    <!--== row ends ==-->

                </div>
            </div>
        </section>
        <!-- hero section ends
================================================== -->

 <!-- testimonial section starts
================================================== -->
<section id="reviews" class="dtr-section dtr-pt-100 dtr-pb-70">
            <div class="container">
                <h2 class="dtr-section-heading text-center">What People Say...</h2>
                
                <!--== row starts ==-->
                <div class="row"> 
                    
                    <!-- column 1 starts -->
                    <div class="col-12 col-md-4"> 
                        
                        <!--== testimonial 1 starts ==-->
                        <div class="dtr-testimonial">
                            <div class="dtr-testimonial-content"> "We had the pleasure of working with Andy Hentges throughout our house buying process. Andy was everything that we could have wanted, knowledge, responsive, and always available to answer any question with none being to small." </div>
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="https://ballparkrealtymn.com/bizops/assets/images/user-1.jpg" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h5 class="dtr-client-name font-weight-regular">Christina Perez - First Time Home Buyer</h5>
                                </div>
                            </div>
                            <!-- client info ends --> 
                        </div>
                        <!--== testimonial 1 ends ==--> 
                        
                        <!--== testimonial 2 starts ==-->
                        <div class="dtr-testimonial dtr-testimonial-with-bg">
                            <div class="dtr-testimonial-content"> "We worked with Kathi Kemmet on the sale of our home. She help guide us through the whole process, kept us informed on everything that was happening."  </div>
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="https://ballparkrealtymn.com/bizops/assets/images/user-2.jpg" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h5 class="dtr-client-name font-weight-regular">Diane Rieken  - Home Owner</h5>
                                </div>
                            </div>
                            <!-- client info ends --> 
                        </div>
                        <!--== testimonial 2 ends ==--> 
                        
                    </div>
                    <!-- column 1 ends --> 
                    
                    <!-- column 2 starts -->
                    <div class="col-12 col-md-4"> 
                        
                        <!--== testimonial 1 starts ==-->
                        <div class="dtr-testimonial dtr-testimonial-with-bg">
                            <div class="dtr-testimonial-content"> "Stacey was awesome. She is very knowledgeable and made my first experience buying a home go smoothly. She went above and beyond to answer my questions and help me throughout the home buying process."</div>
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="https://ballparkrealtymn.com/bizops/assets/images/user-3.jpg" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h5 class="dtr-client-name font-weight-regular">Kari Helfinstine - First Time Home Buyer</h5>
                                </div>
                            </div>
                            <!-- client info ends --> 
                        </div>
                        <!--== testimonial 1 ends ==--> 
                        
                        <!--== testimonial 2 starts ==-->
                        <div class="dtr-testimonial">
                            <div class="dtr-testimonial-content">"Stacey Key does an amazing job! She is super personable and very helpful with giving ideas on how to get your home ready for selling. We were very happy with the job she did selling our home." </div>
                            
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="https://ballparkrealtymn.com/bizops/assets/images/user-4.jpg" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h5 class="dtr-client-name font-weight-regular">Kimberly Hartman</h5>
                                </div>
                            </div>
                            <!-- client info ends --> 
                        </div>
                        <!--== testimonial 2 ends ==--> 
                        
                    </div>
                    <!-- column 2 ends --> 
                    
                    <!-- column 3 starts -->
                    <div class="col-12 col-md-4"> 
                        
                        <!--== testimonial 1 starts ==-->
                        <div class="dtr-testimonial">
                            <div class="dtr-testimonial-content"> "We had such an amazing experience, I don't even know where to start! Our agent, Shawna, was not only extremely helpful, flexible with us, and helped us find the house of our dreams, but she's so also such a kind and genuine person!"</div>
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="https://ballparkrealtymn.com/bizops/assets/images/user-5.jpg" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h5 class="dtr-client-name font-weight-regular">Holly Schluessler</h5>
                                </div>
                            </div>
                            <!-- client info ends --> 
                        </div>
                        <!--== testimonial 1 ends ==--> 
                        
                        <!--== testimonial 2 starts ==-->
                        <div class="dtr-testimonial dtr-testimonial-with-bg">
                            <div class="dtr-testimonial-content"> "Kathi Kemmet is my Realtor and she is AMAZING! Kathi is really knowledgeable and experienced. I am a first time home buyer and there are just so many things that Kathi has been able to help us with along the way - things I would have never thought to consider that are really important when choosing a home. "</div>
                            <!-- client info -->
                            <div class="dtr-client-info clearfix">
                                <div class="dtr-testimonial-user"><img src="https://ballparkrealtymn.com/bizops/assets/images/user-6.jpg" alt="image"> </div>
                                <div class="dtr-testimonial-user-info">
                                    <h5 class="dtr-client-name font-weight-regular">Misty O'Brien</h5>
                                </div>
                            </div>
                            <!-- client info ends --> 
                        </div>
                        <!--== testimonial 2 ends ==--> 
                        
                    </div>
                    <!-- column 3 ends --> 
                    
                </div>
                <!--== row ends ==--> 
                
            </div>
        </section>
        <!-- testimonial section ends
================================================== -->

<div style="background-color:#187429;padding:10px;color:#3e4585">ballpark realty</div>


        <!-- about section starts
================================================== -->
        <section id="about" class="dtr-section dtr-py-100">
            <div class="container">
                <h2 class="dtr-section-heading text-center">How Much Is Your<br/> Home Worth?</h2>

                <!--== row starts ==-->
                <div class="row d-flex align-items-center">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6 small-device-space">

                        <div class="blank-space-right"> <img src="https://ballparkrealtymn.com/bizops/assets/images/img-1.jpg" alt="image" class="dtr-xl-rounded-img"> 

                        </div>
                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6">

                        <!-- text-->


                           <p>Ballpark Realty has a listing rate of 4.5%, compared to the industry average of 6%. We use the best-in-class technology, tactics and market expertise available. In order to help you win, we keep our overhead low and our level of competence high. </p>
                   
                        <p>We're doing more than just closing deals when it comes to the relationships we're developing with our clients and other local real estate professionals. </p>

                        <!-- blockquote -->
                        <blockquote class="dtr-blockquote dtr-my-30 color-dark"> A listing rate of 4.5% at Ballpark Realty puts earnings back where they belong: with you. </blockquote>
                             <p class="dtr-mb-30">Ballpark Realty's goal is simple, we want your real estate experience to be fun and stress-free. Our energetic team offers creative solutions and an outside-the-box approach to real estate. We want to help you achieve your dreams without losing sleep at night.</p>
                        <a href="#" class="dtr-btn dtr-btn-rounded btn-red dtr-mt-30">Signup Now</a> </div>
                    <!--== column 2 ends ==-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- about section ends
================================================== -->

        <!-- features section starts
================================================== -->
        <section class="dtr-section dtr-pt-100 dtr-pb-70 bg-purple">
            <div id="process" class="container">

                <!--== row starts ==-->
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-4">

                        <!-- feature 1 starts -->
                        <div class="dtr-feature">
                            <div class="dtr-feature-left dtr-icon-feature dtr-mb-30 color-white">
                                <div class="dtr-feature-img"><i class="icon-search"></i></div>
                                <h4>Search Properties<br>
                                    for Sale</h4>
                            </div>
                            <p class="color-white-muted">From our energetic team and an outside-the-box approach to real estate, we coach you every step of the way.</p>
                        </div>
                        <!-- feature 1 ends -->

                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-4">

                        <!-- feature 2 starts -->
                        <div class="dtr-feature">
                            <div class="dtr-feature-left dtr-icon-feature dtr-mb-30 color-white">
                                <div class="dtr-feature-img"><i class="icon-home"></i></div>
                                <h4>Sell Your<br>
                                    Property</h4>
                            </div>
                            <p class="color-white-muted">Save with our 4.5% Listing Fee! We keep our overhead low and our competence high in order to assist you in winning.</p>
                        </div>
                        <!-- feature 2 ends -->

                    </div>
                    <!--== column 2 ends ==-->

                    <!--== column 3 starts ==-->
                    <div class="col-12 col-md-4">

                        <!-- feature 3 starts -->
                        <div class="dtr-feature">
                            <div class="dtr-feature-left dtr-icon-feature dtr-mb-30 color-white">
                                <div class="dtr-feature-img"><i class="icon-user"></i></div>
                                <h4>Meet Our <br>
                                  Real Estate Agents</h4>
                            </div>
                            <p class="color-white-muted">We offer our clients the expertise and knowledge they need to make strategic decisions about their transactions.</p>
                        </div>
                        <!-- feature 3 ends -->

                    </div>
                    <!--== column 3 ends ==-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- features section ends
================================================== -->

        <!-- section starts
================================================== -->
        <section class="dtr-section dtr-py-100 bg-dual-blue">
            <div class="container">

                <!--== row starts ==-->
                <div class="row d-flex">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6">
                        <div class="blank-space-right">
                            <p class="dtr-tagline color-red">Let Us help you save </p>
                            <h2 class="dtr-section-heading">Save Thousands with <br>our 4.5% Listing Rate! 
                           </h2>
                            <p class="color-dark">Having a well-thought-out strategy is essential in any endeavor, whether playing baseball or buying or selling a house. To help our clients make informed decisions, Ballpark Realty focuses on providing them with the expertise and knowledge they need. </p>
                            <p class="color-dark">It shouldn't cost you more to have a great real estate experience, whether you're buying or selling. Compared to the industry average of 6%, Ballpark Realty's listing rate is 4.5%, which means that the profits you earn you keep. </p>
                            <p class="dtr-mt-40 color-dark">To speak to representative, call <a href="tel:1-952-431-1930"><span class="font-weight-bold color-red">1-952-431-1930</span></a>. We're here to answer any  question you may have.</p>
                        </div>
                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
               <div class="col-12 col-md-6 small-device-space">
                        <div class="dtr-video-wrapper dtr-video-center dtr-video-btn-white h-100 dtr-xl-rounded" style="background-image: url(https://ballparkrealtymn.com/bizops/assets/images/img-4.jpg);">
                            <!-- video button -->
                            <a class="dtr-video-popup dtr-video-button vbox-item" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=NRu3h0Rp1L4"><span class="dtr-video-button-inner"></span><span class="dtr-border-animation dtr-border-1"></span> <span class="dtr-border-animation dtr-border-2"></span> <span class="dtr-border-animation dtr-border-3"></span> </a> </div>
                    </div>
                    <!--== column 2 ends ==-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- section ends
================================================== -->

       
<hr>

        <!-- faq section starts
================================================== -->
       <section class="dtr-section dtr-py-100" style="background-color: #fdfdfd;">
            <div class="container">

                <!--== row starts ==-->
                <div class="row d-flex align-items-center">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6">
                        <div class="blank-space-right"> <img src="https://ballparkrealtymn.com/bizops/assets/images/img-3.jpg" alt="image" class="dtr-xl-rounded-img"> </div>
                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-6 small-device-space">

                        <!-- text -->
                        <p class="dtr-tagline color-red">Sell It | Rent It | Buy It | Love It</p>
                        <h2 class="dtr-section-heading">Let’s Discuss Your<br>
                            Property Options</h2>

                        <!--== accordion starts ==-->
                        <div class="dtr-accordion accordion accordion-flush" id="accordion1">

                            <!-- item 1 starts -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion1-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseOne" aria-expanded="false" aria-controls="accordion1-collapseOne"> Fun, Creative, and Energetic</button>
                                </h2>
                                <div id="accordion1-collapseOne" class="accordion-collapse collapse show" aria-labelledby="accordion1-headingOne" data-bs-parent="#accordion1">
                                    <div class="accordion-body">Can you imagine “fun” real estate? Buying or selling a home often causes stress, anxiety, and pressure. It's a long process. This is not the case at Ballpark Realty, and we are working hard to change it. We guide you through the process with our creative ideas and out-of-the-box thinking. We want your real estate experience to be enjoyable and to help you reach your goals without interrupting your sleep.</div>
                                </div>
                            </div>
                            <!-- item 1 ends -->

                            <!-- item 2 starts -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion1-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseTwo" aria-expanded="false" aria-controls="accordion1-collapseTwo"> Relationship-Driven - Not Just A Transaction</button>
                                </h2>
                                <div id="accordion1-collapseTwo" class="accordion-collapse collapse" aria-labelledby="accordion1-headingTwo" data-bs-parent="#accordion1">
                                    <div class="accordion-body">Trust, encouragement, and support. These are the foundations of all the relationships we’re working to create at Ballpark Realty. From the relationships we’re building with our clients to the connections we’re cultivating with other local real estate professionals, we’re creating something deeper than sales and transactions. We’re also working to celebrate our community, supporting small businesses and honoring local heroes – our teachers, vets, and first-responders.</div>
                                </div>
                            </div>
                            <!-- item 2 ends -->

                            <!-- item 3 starts -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion1-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseThree" aria-expanded="false" aria-controls="accordion1-collapseThree"> Ballpark Real Estate Strategy</button>
                                </h2>
                                <div id="accordion1-collapseThree" class="accordion-collapse collapse" aria-labelledby="accordion1-headingThree" data-bs-parent="#accordion1">
                                    <div class="accordion-body">Strategy – from the baseball field to buying or selling a home, the right game plan is the key to success. At Ballpark Realty, our focus is on bringing clients the expertise and knowledge they need to make strategic decisions about their transactions. From understanding local market dynamics to the intricacies of marketing and staging, strategy drives every action we take and decision we make. Having a game plan is the key to winning at any game!</div>
                                </div>
                            </div>
                            <!-- item 3 ends -->

                            <!-- item 3 starts -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="accordion1-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1-collapseFour" aria-expanded="false" aria-controls="accordion1-collapseFour"> Sign Up Now! 4.5% Listing Rate </button>
                                </h2>
                                <div id="accordion1-collapseFour" class="accordion-collapse collapse" aria-labelledby="accordion1-headingFour" data-bs-parent="#accordion1">
                                    <div class="accordion-body">Whether you’re buying or selling, an exceptional real estate experience shouldn’t have to cost you more. In an industry where the average listing rate is 6%, Ballpark Realty is home to the 4.5% listing rate, putting profits back where it belongs – with you. We combine best-in-class technology, strategies, and market knowledge to maximize your earnings and savings. We keep our overhead low, and level of expertise high, to help you win.</div>
                                </div>
                            </div>
                            <!-- item 3 ends -->




















                        </div>
                        <!--== accordion ends ==-->

                    </div>
                    <!--== column 2 ends ==-->

                </div>
                <!--== row ends ==-->

            </div>
        </section>
        <!-- faq section ends
================================================== -->

    

    </div>
    <!-- == main content area ends == -->

    <?php include ('includes/footer.php');?>

