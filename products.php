<?php $tagline = "એઇ ને તમે કયો એવી ટિકડેટિક ફાકી બનશે..." ?>
<?php  include("connection.php");  ?>


<?php include("header.php") ?>

<div class="container" style="padding-left: 25px;">
  <form name="myForm" action="orderconf.php" onsubmit="return validateForm(this)" method="POST">
    <div class="row">
      <div class="col-15">
        <label for="fname">Full Name</label>
      </div>
      <div class="col-55">
        <input type="text" id="fname" name="fname" placeholder="તમારું નામ અહીં લખો ..">
      </div>
      <div id="fnerr" class="col-30 alert-danger"></div>
    </div>
    <div class="row">
      <div class="col-15">
        <label for="contact">Contact no.</label>
      </div>
      <div class="col-55">
        <input type="text" id="contact" name="contact" placeholder="તમારો મોબાઇલ નંબર અહીં લખો ..">
      </div>
      <div id="coerr" class="col-30 alert-danger"></div>
    </div>
     <div class="row">
      <div class="col-15">
        <label for="address">Address</label>
      </div>
      <div class="col-55">
       <textarea id="subject" name="address" placeholder="તમારું સરનામું અહીં લખો ..." style="height:100px"></textarea>
      </div>
      <div id="adderr" class="col-30 alert-danger"></div>
    </div>
    <div class="row">
      <div class="col-15">
        <label for="tamaku">Tamaku</label>
      </div>
      <div class="col-55">
        <select id="tamaku" name="tamaku">
          <option value="135">135</option>
          <option value="138">138</option>
          
        </select>
      </div>
      <div  id="tamerr" class="col-30 alert-danger"></div>
    </div>
    <div class="row">
      <div class="col-15">
        <label for="chuno">Chuno</label>
      </div>
      <div class="col-55">
        <select id="chuno" name="chuno">
          <option value="siddharth">siddharth</option>
          <option value="babu kalo">babu kalo</option>
           <option value="babu laal">babu laal</option>
          <option value="peelo">peelo</option>
          
        </select>
      </div>
      <div id="cherr" class="col-30 alert-danger"></div>
    </div>
    <div class="row">
      <div class="col-15">
        <label for="faki">Faki</label>
      </div>
      <div class="col-55">
        <select id="faki" name="faki">
         
          <option value="regular faki">regular faki <strong>10 Rs.</strong></option>
           <option value="special fakiwala">special fakiwala <strong>12 Rs.</strong></option>
          
        </select>
      </div>
      <div id="faerr" class="col-30 alert-danger"></div>
    </div>
    <div class="row">
      <div class="col-15">
        <label for="Quantity">Quantity</label>
      </div>
      <div class="col-55">
        <input type="text" id="quantity" name="quantity" placeholder="ketli faki levi...">
      </div>
      <div id="querr" class="col-30 alert-danger"></div>
    </div>
   
    <div class="row" style="float: left">
      <input type="submit" name="sub" value="Submit">
    </div>
  </form>
</div>
<script type="text/javascript" src="js/script.js">
</script>


<?php include("footer.php")  ?>