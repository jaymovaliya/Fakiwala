
<?php session_start();
if (!(isset($_SESSION['adminlogin']))  && !(isset($_SESSION['adminpass']))) {
    header("location:./admin/index.php");
}
    include("connection.php");

    
    $sel=mysqli_query($cn,"select * from orders order by o_id DESC");
    //$ft=mysqli_fetch_array($sel) ;
    //print_r($ft);

    if(isset($_REQUEST['d']))
    {
        $dt=$_REQUEST['d'];
        
        mysqli_query($cn,"delete from orders where o_id='$dt'");
        header("location:adminpanel.php");
        
    }
     if(isset($_REQUEST['deli']))
    {
        $delit=$_REQUEST['deli'];
        
        mysqli_query($cn,"update orders set delivered=1 where o_id='$delit'");
        header("location:adminpanel.php");
        
    }
    if(isset($_REQUEST['da']))
    {
        $md=$_REQUEST['md'];
        
        foreach($md as  $vt)
        {
            mysqli_query($cn,"delete from orders where o_id='$vt'");
            
        }
        header("location:adminpanel.php");
    }
    if(isset($_REQUEST['delivered']))
    {
         $del=$_REQUEST['md'];
        
        foreach($del as  $vd)
        {
            //mysqli_query($cn,"insert into orders (delivered) values("1")");
            mysqli_query($cn,"update orders set delivered=1 where o_id='$vd'");
            
        }
         header("location:adminpanel.php");
    }
?>
<html>
    <head>
        <title>
            value show in php my sql
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <a href="logout.php"><button class="btn btn-danger">Log Out</button></a>
        <form action="" method="post">
            <table align="center" border="1" class="table table-striped">
                <tr>
                    <th>order id</th>
                    <th>User name</th>
                    <th>contact no.</th>
                    <th>addressr</th>
                    <th>tamaku</th>
                    <th>chuno</th>
                    <th>faki type</th>
                    <th>quantity</th>
					<th>amount</th>
                    <th>delivered</th>
                    <th>Delete</th>
                    <th>Mark  <input type="submit" name="da" value="delete"><input type="submit" name="delivered" value="delivered"></th>
                </tr>
                <?php
                while($ft=mysqli_fetch_array($sel))
                {
                    ?>
                        <tr>
                            <td><?php echo $ft[0];?></td>
                            <td><?php echo $ft[1];?></td>
                            <td><?php echo $ft[2];?></td>
                            <td><?php echo $ft[3];?></td>
                            <td><?php echo $ft[4];?></td>
                            <td><?php echo $ft[5];?></td>
                            <td><?php echo $ft[6];?></td>
                            <td><?php echo $ft[7];?> </td>
                            <td><?php echo $ft[8];?></td>
							<td><?php echo $ft[9]."  ";?><a href="adminpanel.php?deli=<?php echo $ft[0];?>">Delivered</a></td>
                            <td><a href="adminpanel.php?d=<?php echo $ft[0];?>">Delete</a></td>
                            <td><input type="checkbox" value="<?php echo $ft[0];?>" name="md[]"></td>
                        </tr>
                    <?php 
                    
                }
                ?>
               
            </table>
        </form>
    </body>
</html>
