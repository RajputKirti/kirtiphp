<?php
include"connect.php";
session_start();



?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
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
                <h1>Blog Form <span>with HTML5 and CSS3</span></h1>
				<nav class="codrops-demos">
					<span>Click <strong>"Join us"</strong> 
				</nav>
            </header>
			   <?php
			$id =  $_SESSION['id'];
			$query1="SELECT * FROM users WHERE id='$id'";
			$result1 = $conn->query($query1); 
			$row1 = $result1->fetch_assoc(); 
			$name = $row1["name"];
			?>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="blogmsg.php" method="post" enctype="multipart/form-data">
                                    <h1>welcome : <?php echo $name; ?></h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Name </label>
                                    <input id="username" name="name" required="required" type="text" placeholder="name"/>
                                </p>
                                <p> 
                                    <label for="" class="uname" data-icon="u">Write:</label>
                                   </p><p> <textarea style="margin-left:50px;"  name="msg" rows="10" cols="50"  placeholder="Write Your Thoughts....." required ></textarea>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Display" /> 
								</p>

                            </form>
                        </div>
						  </div>
						
                    </div>
                </div>  
            
    </body>
</html>