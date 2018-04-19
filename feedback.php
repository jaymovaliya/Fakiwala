<?php $tagline = "અમારી ફાકી વિશે કાઇક તો લખવુ જ પડે સાહેબ...";  ?>

<?php  include("connection.php");  ?>

<?php 




if(isset($_REQUEST['subm']))
    {
        $fb1=$_REQUEST['fbname'];
        $fb2=$_REQUEST['fbcontact'];
        $fb3=$_REQUEST['fbmessage'];
        


      
        mysqli_query($cn,"insert into feedback (fb_name,fb_contact,message) values('$fb1','$fb2','$fb3')") or die(mysqli_error()) ;

      
         header("location:feedback.php?fb=1");
    }






?>


<?php include("header.php") ?>
  

 <div class="container">
   <div style="text-align: center;">
    <span style="color: #228B22;"  ><?php if (isset($_REQUEST['fb'])) {
      echo "Thankyou very much for your valuable feeback!!!";

    }  else {  echo "";  }  ?></span>
  </div>
  <form action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="row">
      <div class="col-25">
        <label for="fname">Your Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fbname" name="fbname" required="" placeholder="તમારું નામ અહીં લખો ..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="fbcontact">Contact</label>
      </div>
      <div class="col-75">
         <input type="text" id="fbcontact" name="fbcontact" required="" placeholder="તમારો મોબાઇલ નંબર અહીં લખો ..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Message</label>
      </div>
      <div class="col-75">
        <textarea id="fbmessage" name="fbmessage" required="" placeholder="અહીં લખો કે અમારી સેવા કેવી હતી ..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="subm" value="Submit">
    </div>
  </form>
</div>

<?php include("footer.php") ?>
