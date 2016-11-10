<?php
ob_start();
	require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' href='image/icon.ico' type='image/x-icon' />
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
</head>
<body>
<?php
	if (isLogin()){
		$nim=$_SESSION['nim'];
    		$voting2 = $_GET['femalevoteid'];
      		$query1 = $conn->prepare("update voting set voting2=:voting1 where nim=:nim");
		$query1->bindParam(':voting1',$voting2);
		$query1->bindParam(':nim',$nim);
		$query1->execute();
    		header("location:thankyou.php");
}else{
			echo "";
		}
ob_end_flush();  

?>
	<script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
</body>
</html>


	