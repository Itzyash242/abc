<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <title>MYCODE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>

   <nav style="display: flex; align-items: center; justify-content: space-between; background-color: #ffffff; padding: 10px 20px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); position: fixed; width: 100%; top: 0; left: 0; z-index: 1000;">
    <a href="index.html" style="display: flex; align-items: center; text-decoration: none;">
        <img src="img/icon-1.png" alt="Logo" style="width: 45px; margin-right: 10px;">
        <h2 style="margin: 0; color: #007bff; font-size: 24px; font-weight: bold;">MyCode</h2>
    </a>
    <button type="button" style="background: none; border: none; font-size: 24px; cursor: pointer; display: none;" onclick="toggleMenu()">
        ☰
    </button>
    <div id="navbarCollapse" style="display: flex; gap: 20px;">
        <a href="index.php" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">Home</a>
       
	   <a href="#" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">About</a>
 <a href="#" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">Contact Us</a>		
       <?php   if (isset($_SESSION['uemail'])) { ?>
	   
		 <a href="#" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">  <span>Welcome, <?php echo $_SESSION['uname'] ?></span></a>
			<a href="#" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">Feedback</a>
			<a href="#" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">Complain</a>
	  <a href="#" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">Add to Cart</a>
	  <a href="logout.php" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">Logout</a>
		<?php } 
		
		else { ?>
		 <a href="login.php" style="text-decoration: none; color: #333; font-size: 18px; font-weight: 500; padding: 8px 12px;">Login</a>
        
		<?php } ?>
	</div>
</nav>

<script>
    function toggleMenu() {
        var nav = document.getElementById("navbarCollapse");
        if (nav.style.display === "flex") {
            nav.style.display = "none";
        } else {
            nav.style.display = "flex";
        }
    }
</script>


