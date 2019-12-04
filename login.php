<?php session_start(); /* Starts the session */

	if(isset($_POST['Submit'])){

		$logins = array('Spencer' => 'password1','Cecilia' => 'password2','Patrick' => 'password3');

		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

		//checks if login is successful, then creates a new session variable for username
        //and redirects to index.php
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['Username']=$Username;
			header("location:index.php");
			exit;
		} else {
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>My PHP Project</title>
	    <!-- main.css-->
	    <link rel="stylesheet" href="main.css">
	    <!-- google fonts-->
	    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	    <!-- font awesome-->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <!-- Rows and Col cheatsheet -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	</head>

	<header>
	  <div class="row" style=padding-top:10px;padding-bottom:10px>
	    <div class="col-sm-1">
	      <div class="logo_mwsu">
	        <img src="img/logo.png" width="90px" height="90px" alt="img">
	      </div>
	    </div>
	    <div class="col-sm-11">
	      <center><h1 class="fun_with_php">Missouri Western State University: Quiz</h1></center>

	      <center><h5 class="fun_with_php">FUN WITH PHP</h5></center>
	    </div>
	    <br>
	    </br>
	  </div>
	</header>

	<body>
	</div>
	<br>
	<br>
	<br>
	<form action="" method="post" name="Login_Form">
	  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
	    <?php if(isset($msg)){?>
	    <tr>
	      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
	    </tr>
	    <?php } ?>
	    <tr>
	      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
	    </tr>
	    <tr>
	      <td align="right" valign="top"><br>Username</td>
	      <td><br><input name="Username" type="text" class="Input"></td>
	    </tr>
	    <tr>
	      <td align="right">Password</td>
	      <td><input name="Password" type="password" class="Input"></td>
	    </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
	    </tr>
	  </table>
	</form>
	</body>

	<footer>
	  <div class="col-sm-12">
	    <center>
	      <p class="footer" style=background-color:black;padding:10px>Class: CSC246
	        <br>Professor: Dr. Kendall-Morwick
	        <br>###Students###
	        <br>Spencer Palmeter
	        <br>Patrick Bracciano
	        <br>Cecilia Tackett
	      </p>
	    </center>
	  </div>
	</footer>
</html>
