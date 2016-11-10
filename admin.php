<?php
    require 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel='shortcut icon' href='image/icon.ico' type='image/x-icon' />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>ADMIN</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

          <script src="js/prefixfree.min.js"></script>

          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

          <link rel="stylesheet" href="assets/css/normalize.css">

<style type="text/css">
    .logo{
            margin: auto;
            height: 260px;
            width: 100%;
            float: left;
            background-position: fixed;
        }

    body{
        background:black;
    }
    .img-center {margin:0 auto;}

    .wrapper {    
    font-family: Helvetica;
    }


.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  }

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
  color: #D4AF37;
}

.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
}

input[type="text"] {
  margin-bottom: 0px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  color: #D4AF37;
  border :1px solid #D4AF37;
}

input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  color: #D4AF37;
  border :1px solid #D4AF37;
}


.btn-primary , .btn-primary:hover{
    background: #000 ;
    color: #D4AF37;
    border :1px solid #D4AF37;
    margin-top: 10px;
}

body{
    background: radial-gradient(circle, #202020,#000000);
    background-size:cover;
    width: 100%;
}


a:link{
  text-decoration: none;
  color: #D4AF37;
}

a, a:hover{
  color : #D4AF37;
}

.footer{
  margin-top: 0px;
}

.text-center{
  font-family: "Trajan Pro";
  font-size: 24px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  color: #fff;
  }
@media (min-width: 1200px) {
}

@media (min-width: 992px) and (max-width: 1199px) {
}

@media (min-width: 768px) and (max-width: 991px) {
}

@media (max-width: 479px) {
  .logo{
            margin: auto;
            height: 250px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}

@media (max-width: 425px) {
  .logo{
            margin: auto;
            height: 230px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}

@media (max-width: 375px) {
  .logo{
            margin: auto;
            height: 200px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}

@media (max-width: 320px) {
  .logo{
            margin: auto;
            height: 170px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}


</style>
</head>
<body>

<!-- <div class="container-fluid">
    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
  <div class="logo text-center">
            <img src="image/banner.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>
        <div id="login" name="Login_Form" class="form-signin">   
   <?php
   if(isLogin()){
    	if($_SESSION['nim'] == 'admin'){}
    	else{
    		die("Not Previlaged to see this page lul");
   	 }
    		}else{
    	die("<h1 class='text-center'>YOU ARE NOT PRIVILEGED TO SEE THIS PAGE!</h1>");
   	 }
  ?> 	 
            <button class='btn btn-lg btn-primary btn-block' onclick="location.href='male.php'" formtarget="_blank">MALE GRAPH</button>
            <button class='btn btn-lg btn-primary btn-block' onclick="location.href='female.php'" formtarget="_blank">FEMALE GRAPH</button>
            <button class='btn btn-lg btn-primary  btn-block' onclick="location.href='result.php'" formtarget="_blank">RESULT</button>
        </div>  

        <div class="footer text-center">
            <img src="image/footer.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>
</body>
</html>                                     