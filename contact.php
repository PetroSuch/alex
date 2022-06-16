<?php
if(isset($_POST['message'])){
    $to      = 'biz@alextyshchenko.com';
    $subject = $_POST['company']; 
    $message = "<b>Name:</b>".$_POST['name']."<br><b>Message:</b>:".$_POST['message']."<br><b>Company:</b>".$_POST['company']."<br><b>Service:</b>".$_POST['service']."<br><b>Email:</b>".$_POST['email']; 
 
    $headers = "From: ".$_POST['name']." <".$_POST['email'].">\r\n"; $headers = "Reply-To: ".$_POST['email']."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/';
    $send_email = mail($to,$subject,$message,$headers);
    echo($send_email);
 }
?>

<!DOCTYPE html><!--  This site was created by Dennis Snellenberg (Code by Dennis)  -->
<html lang="en">
   <?php include('includes/metadata.php');?>
   <body data-barba="wrapper">
      <!-- <div class="load-icon no-select"><svg width="14" height="14" viewBox="0 0 14 14"><path d="M13.76 7.004A7 7 0 0 0 7 14l-.004-.24A7 7 0 0 0 0 7l.24-.004A7 7 0 0 0 7 0l.004.24A7 7 0 0 0 14 7z" fill="#FFF" fill-rule="evenodd"/></svg></div> -->
      <?php include('includes/loader.php');?>
      <main class="main" id="contact" data-barba="container" data-barba-namespace="contact" >
         <?php include('includes/navbar-mobile.php');?>
         <div class="main-wrap" data-scroll-container>
    
            <header class="section default-header contact-header theme-dark" data-scroll-section>
                <?php include('includes/navbar-desktop.php');?>

               <div class="container medium">
                  <div class="row once-in">
                     <div class="flex-col">
                        <h1>
                           <span>
                              <div class="profile-picture"></div>
                              Let's start a 
                           </span>
                           <span>project together</span>
                        </h1>
                     </div>
                     <div class="flex-col">
                        <div class="profile-picture"></div>
                        <div class="arrow">
                           <svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>arrow-up-right</title>
                              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g id="Artboard" transform="translate(-1019.000000, -279.000000)" stroke="#FFFFFF" stroke-width="1.5">
                                    <g id="arrow-up-right" transform="translate(1026.000000, 286.000000) rotate(90.000000) translate(-1026.000000, -286.000000) translate(1020.000000, 280.000000)">
                                       <polyline id="Path" points="2.76923077 0 12 0 12 9.23076923"></polyline>
                                       <line x1="12" y1="0" x2="0" y2="12" id="Path"></line>
                                    </g>
                                 </g>
                              </g>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="row once-in">
                     <div class="flex-col">
                        <form id="contactForm" class="form" method="POST" action="">
                           <!-- <div class="website-field">
                              <label class="label" for="tel">Phone Number</label>
                              <input class="field" type="text" id="form-tel" name="tel" tabindex="-1">
                           </div> -->
                           <div class="form-col">
                              <h5>01</h5>
                              <label class="label" for="name">What's your name?</label>
                              <input class="field" type="text" id="form-name" name="name" value="" required placeholder="John Doe *">
                           </div>
                           <div class="form-col">
                              <h5>02</h5>
                              <label class="label" for="email">What's your email?</label>
                              <input class="field" type="email" id="form-email" name="email" value="" required placeholder="john@doe.com *">
                           </div>
                           <div class="form-col">
                              <h5>03</h5>
                              <label class="label" for="company">What's the name of your organization?</label>
                              <input class="field" type="text" id="form-company" name="company" value="" required placeholder="John & Doe ®">
                           </div>
                           <div class="form-col">
                              <h5>04</h5>
                              <label class="label" for="service">What services are you looking for?</label>
                              <input class="field" type="text" id="form-service" name="service" value="" required placeholder="Web Design, Web Development ...">
                           </div>
                           <div class="form-col">
                              <h5>05</h5>
                              <label class="label" for="message">Your message</label>
                              <textarea class="field" type="text" id="form-message" name="message" rows="4"  required placeholder="Hello Dennis, can you help me with ... *"></textarea>
                           </div>
                           <div class="btn-contact-send">
                              <div class="btn btn-round" data-scroll data-scroll-speed="2">
                                 <div class="btn-click magnetic" data-strength="100" data-strength-text="50">
                                    <div class="btn-fill"></div>
                                    <span class="btn-text">
                                    <input type="submit" name="submit" value="Send it!" class="form-btn">
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="flex-col">
                        <h5>Contact Details</h5>
                        <ul class="links-wrap">
                           <li class="btn btn-link btn-link-external">
                              <a href="mailto:info@dennissnellenberg.com" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                              <span class="btn-text">
                              <span class="btn-text-inner">info@dennissnellenberg.com</span>
                              </span>
                              </a>
                           </li>
                           <li class="btn btn-link btn-link-external">
                              <a href="tel:+31627847430" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                              <span class="btn-text">
                              <span class="btn-text-inner">+31 6 27 84 74 30</span>
                              </span>
                              </a>
                           </li>
                        </ul>
                        <h5>Business Details</h5>
                        <ul class="links-wrap">
                           <li>
                              <p>CoC: 65527690</p>
                           </li>
                           <li>
                              <p>VAT: NL002323039B05</p>
                           </li>
                           <li>
                              <p>Location: The Netherlands</p>
                           </li>
                        </ul>
                        <h5>Socials</h5>
                        <ul class="links-wrap">
                           <li class="btn btn-link btn-link-external">
                              <a href="https://www.awwwards.com/dennissnellenberg/" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                              <span class="btn-text">
                              <span class="btn-text-inner">Awwwards</span>
                              </span>
                              </a>
                           </li>
                           <li class="btn btn-link btn-link-external">
                              <a href="https://www.instagram.com/codebydennis/" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                              <span class="btn-text">
                              <span class="btn-text-inner">Instagram</span>
                              </span>
                              </a>
                           </li>
                           <li class="btn btn-link btn-link-external">
                              <a href="https://dribbble.com/dennissnellenberg" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                              <span class="btn-text">
                              <span class="btn-text-inner">Dribbble</span>
                              </span>
                              </a>
                           </li>
                           <li class="btn btn-link btn-link-external">
                              <a href="https://www.linkedin.com/in/dennissnellenberg/" target="_blank" class="btn-click magnetic" data-strength="20" data-strength-text="10">
                              <span class="btn-text">
                              <span class="btn-text-inner">LinkedIn</span>
                              </span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </header>
            <?php include('includes/footer.php');?>

         </div>
      </main>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
      <script src="https://unpkg.com/@barba/core"></script>
      <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.6.1/dist/lazyload.min.js"></script>
      <script src="https://dennissnellenberg.com/assets/js/locomotive-scroll.min.js"></script>        <script defer src="https://dennissnellenberg.com/assets/js/index-new.js"></script>    
   </body>
</html>