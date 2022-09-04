<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>

<html lang="en-us">

<head>

    <title>Movie Search List</title>
    <meta charset="UTF-8">

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- CSS -->
   
    <link rel="stylesheet" type="text/css" href="Style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
<!-- <p style="background-image: url('movieimage.jpg');"> -->
<div class="content">
    
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>

    	<h3 style="text-align: right; margin-right: 30px; color:#d9edf7; margin-bottom:0%">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
    	 <a href="index.php?logout='1'" style="color: white;"><button style="float: right;margin-top: 0;margin-right: 30px;background-color: #080c0c;color: #ccc;">Log Out</button></a>
    <?php endif ?>
</div>
    <!-- Header -->
    <div class="header">
        <h1>Movie Search List</h1>
    </div>
    <br>

    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <input id="movie-input" class="form-control mr-sm-2" type="search" placeholder="Search your movie!"
                aria-label="Search">
            <button id="search-movie" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	 </form>
    </nav>

    <div id="main-container">
    

        <div id="search-container">

            <!-- Results -->
            <div id="results">
            </div>

        </div>

        <!-- Wishlist Container-->
        <div id="wishlist-container">
        </div>

    </div>

    <div id="video-player"></div>

    <div id="video-background" class="close-trailer"></div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Script -->
    <script type="text/javascript" src="./app.js"></script>
</body>
</html>
