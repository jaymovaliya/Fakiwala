<?php session_start(); 
include("connection.php");  


$fnlname   = $_SESSION['fnlname'];
$fnlfaki  = $_SESSION['fnlfaki'];
 $fnlqua  = $_SESSION['fnlqua'];
 $fnlcont = $_SESSION['fnlcont'];
 $fnladd = $_SESSION["fnladd"];
 $fnltmk = $_SESSION['fnltmk'];
 $fnlchn = $_SESSION['fnlchn'];
 $fnlamnt = $_SESSION['fnlamnt'];
 $fnladmin = array(8160708014);
 
 session_destroy();
 
 
   mysqli_query($cn,"insert into orders (name,mobile_no,address,tamaku,chuno,fakitype,quantity,amount) values('$fnlname','$fnlcont','$fnladd','$fnltmk','$fnlchn','$fnlfaki','$fnlqua','$fnlamnt')") or die(mysqli_error()) ;
 
 

  require('textlocal.class.php');

$textlocal = new Textlocal('false','false' ,'KEY IS HERE');
$fnlnames   = "soni";
$numbers = array($fnlcont);
$sender = 'TXTLCL';
$message = "Dear " . $fnlname  . " tamaro " . $fnlqua . " ".$fnlfaki . " no order confirm thai gayel che. je 15 minute ma aapne deliver thai jse... 8160708014." ;
$message2 = $fnlname . " " . $fnlqua . " ". $fnlfaki ." ".$fnltmk." ".$fnlchn ." ".$fnlcont ."." ; 

 try {
   $result = $textlocal->sendSms($numbers, $message, $sender);
   $result2 = $textlocal->sendSms($fnladmin, $message2, $sender);
    //print_r($result);
   // print_r($result2);
} catch (Exception $e) {
   // die('Error: ' . $e->getMessage());
}  





$tagline="એઇ ને તમે કયો એવી ટિકડેટિક ફાકી બનશે.."; 

include("header.php"); ?>


<div class="container">
	<div style="text-align: center;">
	<span>congratulations  <strong> <?php echo $fnlname;  ?>  </strong></span>	<br>
	<span>Your order of <strong> <?php echo $fnlqua; ?>  <?php echo $fnlfaki; ?> </strong> has been confirmed.</span><br>
	<span>Tamara order mujab ni faki 15 minute ma tamara didhela address par pahochi jase.</span>
	</div>
</div>

<?php include("footer.php") ?>