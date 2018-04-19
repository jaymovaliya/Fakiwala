<?php
    include("connection.php");

    
    $sel=mysqli_query($cn,"select * from feedback");
    //$ft=mysqli_fetch_array($sel) ;
    //print_r($ft);

    if(isset($_REQUEST['d']))
    {
        $dt=$_REQUEST['d'];
        
        mysqli_query($cn,"delete from feedback where feedback_id='$dt'");
        header("location:fbadmin.php");
        
    }
    if(isset($_REQUEST['da']))
    {
        $md=$_REQUEST['md'];
        
        foreach($md as  $vt)
        {
            mysqli_query($cn,"delete from feedback where feedback_id='$vt'");
            
        }
        header("location:fbadmin.php");
    }
?>
<html>
    <head>
        <title>
            Feedbacks 
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        
    </head>
    <body>
        <form action="" method="post">
            <table class="table table-striped" border="1">
                <tr>
                    <th>Feedback id</th>
                    <th>Name</th>
                    <th>contact no.</th>
                    <th>Feedback</th>
                    <th>Delete</th>
                    <th>Mark - <input type="submit" name="da" value="Delete Marked"></th>
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
                            
                           
                            <td><a href="fbadmin.php?d=<?php echo $ft[0];?>">Delete</a></td>
                            <td><input type="checkbox" value="<?php echo $ft[0];?>" name="md[]"></td>
                        </tr>
                    <?php 
                    
                }
                ?>
                
            </table>
        </form>
    </body>
</html>