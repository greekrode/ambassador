<?php
	ob_start();
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel='shortcut icon' href='image/icon.ico' type='image/x-icon' />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>Thankyou</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <script src="js/prefixfree.min.js"></script>

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
  margin-top: -50px;
}

h1{
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
            height: 240px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}

@media (max-width: 425px) {
  .logo{
            margin: auto;
            height: 220px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}

@media (max-width: 375px) {
  .logo{
            margin: auto;
            height: 180px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}

@media (max-width: 320px) {
  .logo{
            margin: auto;
            height: 160px;
            width: 100%;
            float: left;
            background-position: fixed;
  }
}

</style>
</head>
<body>

<div class="container-fluid">
        <div class="logo text-center">
            <img src="image/banner.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>

        <form class="form-signin"> 
        <h1 class="text-center">SORRY, YOU CAN'T VOTE YET.</h1>
        </form>  
        <?php
        session_destroy();
        header( "refresh:5; url=index.php" ); 
        ob_end_flush();
        ?>
        <div class="footer text-center">
            <img src="image/footer.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>
</div>
</body>
</html>                                     