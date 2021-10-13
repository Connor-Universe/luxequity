<?php
 include('footer_process.php');
?>
<footer id="contact">
  <section class="contacts">

  
   <p class="head">Contact</p>
   <div class="first">
   <div class="container">
     <div class="row">
       <div class="col-lg-5">
         <p class="first">Leave your request</p>
         <span class="contact-success">
            
            <?php echo"$fail"?>
</span>
<span class="contact-fail">
<?php echo"$success"; ?>
</span>
         <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" >
           <div class="input-group">
             <input type="text" placeholder="Name *" name="name" class="form-control" value="<?php echo"$last_name";?>">
             <?php echo"$last_name_err";?>
           </div>
           <div class="input-group">
              <input type="text" name="email" placeholder="Your personal email *" class="form-control" value="<?php echo"$email";?>">
              <?php echo"$email_err";?>
           </div>
           <div class="input-group">
             <input type="text" name="subject"  placeholder="Your telegram or skype nickname *"class="form-control"  value="<?php echo"$subject";?>" >
             <?php echo"$subject_err";?>
           </div>
           <div class="input-group">
             <textarea name="message" id="" cols="30" rows="10" placeholder="Message *"></textarea>
             <?php echo"$message_err";?>
           </div>
           <span class="input-group-btn"><button type="submit" name="send">Send</button></span>
         </form>
       </div>
       <div class="col-lg-6">
         <ul>
           <li><a href=""><div class="social"><img src="img/telegram-footer.png" alt=""></div><span>Telegram News</span></a></li>
           <li><div class="social"><img src="img/marker.png" class="social"alt=""></div><span>9488 Manchester Road GUILDFORD GU94 1AH United Kingdom</span></li>
           <li><a href=""><div class="social"><img src="img/mail-footer.png" alt=""></div><span>hello@luxequity.io</span</a></li>
           <li><a href="t.me/luxequity_agency"><div class="social"><img src="img/telegram-footer.png" alt=""></div><span>@luxequity_agency</span></a></li>
         </ul>
       </div>
     </div>
   </div>
</div>
</section>
<hr>
  <div class="next">
   <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6">
          <ul>
            <li><a href="index.php#service">Services/Prices</a></li>
            <li><a href="index.php#client">Clients</a></li>
            <li><a href="case.php">Cases</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-6">
        <ul>
            <li><a href="index.php#test">Testimonials</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li><a href="career.php">Careers</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-6">
        <ul>
            <li><a href="">blog</a></li>
            <li><a href="terms.php">Terms & Conditions</a></li>
            <li><a href="copyright.php">Copyright Notice</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-6">
        <ul>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="cookie.php">Cookie Policy</a></li>
            <li><a href=""></a></li>
          </ul>
        </div>
      </div>
   </div>
</div>
   <p class="lux">Luxequity.io 2018-2020.All rights reserved</p>
   <p class="about"><a href="about.php">About Luxequity.io</a></p>
</footer>


<script src="js/jquery-3.4.1.js"></script>
            <script src="js/bootstrap.bundle.js"></script>
     
   <script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>  