<?php
include"connect.php";
session_start();



?>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>



<body>
 <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
        <header>
		<section>
                <h1>Blog Form <span>with HTML5 and CSS3</span></h1>
				<nav class="codrops-demos">
					 <strong>"Join us"</strong>
				</nav>
            </header>
			  <?php
			$id =  $_SESSION['id'];
			$query1="SELECT * FROM msg WHERE user_id='$id'";
			$result1 = $conn->query($query1); 
			$row1 = $result1->fetch_assoc(); 
			$name = $row1["name"];
			$msg = $row1["msg"];
			
			?>
			<div id="container_demo">
			<div class="wrap" style="width:100%;height:auto;">
			<div id="clogin" style="width:90%;height:40%;border-style:solid;margin-left:6%; ">
			<h1> <font type="times new roman" size="5" color="blue" >Name: </font><font size="3"><?php echo $name; ?></h1>
            <h1> <font type="times new roman" size="5" color="blue" >Message:</font> <?php echo $msg; ?></h1>
            
            </div>
			<div id="clogin" style="width:90%;height:40%;border-style:solid;margin-top:5px;margin-left:6%; ">
            </div>            
			<div id="clogin" style="width:90%;height:40%;border-style:solid;margin-top:5px;margin-left:6%; ">
            </div>
			</div>
			</div>
			</section>
			
</body>

</html>