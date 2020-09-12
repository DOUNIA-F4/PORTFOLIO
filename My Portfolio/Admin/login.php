<?php include 'config/db.php'; 
require 'config/session.php';
	
	?>	

<?php 
    Session::start();
   
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {   
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $db->quote($_POST['username']);
                $password = $db->quote($_POST['password']);
                $select = $db->query("select * from admin where username = $username and password = $password");
                
                if($select->rowCount() > 0){
                    $_SESSION['username'] = $username;
                    header("Location: Dashbord.php");
				}
				
				else{
					$message = "Your Login Name or Password is invalid.";
				  }
            }
       
       
    }  
?>


<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
     <link rel="stylesheet" href="assets/vendor/bootstrap4/css/bootstrap.min.css">
    <link rel="icon" type="image/ico" href="../My portfolio/assets/img/favicon.png" />
    <link rel="stylesheet" href="assets/css/styleLogin.css">
	<link rel="stylesheet" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">


   

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/img/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
                </span>
                <?php if (! empty($message)) { ?>
              <p class="errorMessage"><?php echo $message; ?></p>
                  <?php } ?>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
    

</body>
</html>