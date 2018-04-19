<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fakiwala.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="jumbotron" style="height: 180px; padding-top: 5px;" >
  <div class="container text-center" style="background-color: #51ba66; color: black;">
    <h1>Fakiwala.com</h1>    
    <p><?php echo $tagline;   ?></p>
    <!--<button type="button" class="btn btn-default btn-lg">Order Faki Here</button>-->
  </div> 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">FAKIWALA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
       <!-- <li><a href="ingredients.php">Ingredients</a></li> -->
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>
  </div>
</nav>
