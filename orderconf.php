<?php session_start();  


if(isset($_REQUEST['confirm']))
    {   header("location:confirmed.php");
     
     } 
 if(isset($_REQUEST['cancle']))

{
	header("location:products.php");
}
  $tagline = "એઇ ને તમે કયો એવી ટિકડેટિક ફાકી બનશે..";
   include("connection.php");  


 include("header.php") ;
 $c1 = $_REQUEST['fname'];  
	   $c2 = $_REQUEST['contact'];
	   $c3 = $_REQUEST['address'];
	   $c4 = $_REQUEST['tamaku'];
	   $c5 = $_REQUEST['chuno'];
	   $c6 = $_REQUEST['faki'];
	   $c7 = $_REQUEST['quantity'];
	   $date = new DateTime();
          $dates = $date->format('Y-m-d H:i:s');
          $datess = date("Y-m-d H:i:s", (strtotime(date($dates)) + 19800));
          $dt = DateTime::createFromFormat("Y-m-d H:i:s", $datess);
          $hours = $dt->format('H');
	   
	   if ($hours<3) {
  	        $c8 = $c7*15;
           }
	   
	   else if($c6=="regular faki"){
	   	$c8 = $c7*10;
	   }
	   else{
	   	$c8 = $c7*12;
	   }
	   
	   
	   $_SESSION['fnlname']   = $_REQUEST['fname'];
       $_SESSION['fnlfaki']  = $_REQUEST['faki'];
       $_SESSION['fnlqua']  = $_REQUEST['quantity'];
       $_SESSION['fnlcont'] = $_REQUEST['contact'];
       $_SESSION['fnladd'] = $_REQUEST['address'];
       $_SESSION['fnltmk'] = $_REQUEST['tamaku'];
       $_SESSION['fnlchn'] = $_REQUEST['chuno'];
       $_SESSION['fnlamnt'] = $c8;




	  
  ?>

 










<div class="container">
	<div style="text-align: center;" >
		<strong>You are almost Done</strong><br>
		<span>કૃપા કરીને ઓર્ડરની પુષ્ટિ કરતા પહેલાં વિગતોને ચકાસો ...</span>
		<table align="center" class="table table-condensed" >
			<tr>
				<th>Name</th>
				<td><?php echo $c1;  ?></td>
			</tr>
			<tr>
				<th>Contact</th>
				<td><?php echo $c2;  ?></td>
			</tr>
			<tr>
				<th>Tamaku</th>
				<td><?php echo $c4;  ?></td>
			</tr>
			<tr>
				<th>Chuno</th>
				<td><?php echo $c5;  ?></td>
			</tr>
			<tr>
				<th>Faki Type</th>
				<td><?php echo $c6;  ?></td>
			</tr>
			<tr>
				<th>Quantity</th>
				<td><?php echo $c7;  ?></td>
			</tr>
			<tr>
				<th>Amount</th>
				<td><?php echo $c8;  ?></td>
			</tr>
		</table>


		<form action="" method="post">

			<input type="hidden" name="fname"  value="<?php echo $c1;  ?>">
			<input type="hidden" name="contact"  value="<?php echo $c2;  ?>">
            <input type="hidden" name="address"  value="<?php echo $c3;  ?>">
            <input type="hidden" name="tamaku"  value="<?php echo $c4;  ?>">
            <input type="hidden" name="chuno"  value="<?php echo $c5;  ?>">
            <input type="hidden" name="faki"  value="<?php echo $c6;  ?>">
            <input type="hidden" name="quantity"  value="<?php echo $c7;  ?>">
            <input type="hidden" name="amount"  value="<?php echo $c8;  ?>">
            



		<div>
			<input style="float: left" type="submit" name="confirm" value="confirm">
		</div>
		<div>
			<input style="float: right;background-color: red;" type="submit" name="cancle" value="cancle">
		</div>
		</form>
	</div>
	
</div>


<?php include("footer.php") ?>