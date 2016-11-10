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

<title>Vote : Female</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <script src="js/prefixfree.min.js"></script>

          <link rel="stylesheet" href="assets/css/normalize.css">

          <script src="js/confirmationfemale.js"></script>

          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style type="text/css">
    .space{
            width: 100%;
            height:30px;
            float: left;
        }
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
    .button{
        margin-left:43%;
        float: left;
    }
    .atur{
        float: left;
    }

  .wrapper {    
    font-family: Helvetica;
    }


.form-signin {
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  border: 3px dotted rgba(0,0,0,0.1);  
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



.btn-primary , .btn-primary:hover{
    background: #000 ;
    color: #D4AF37;
    border :1px solid #D4AF37;
}

body{
   background: black;
}


a:link{
  text-decoration: none;
  color: #D4AF37;
}

a, a:hover{
  color : #D4AF37;
}

.footer{
    margin-top: 20px;
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

.MaleBut,.FemaleBut {
    width: 50%;

    padding-left: 1%;
    padding-right: 1%;
    padding-top: 4%;
    float: left;
    background-size: 100% auto;
}
.candidate{
    width:100%;
    height: 175px;
    margin-top: 2%;
    margin-bottom: 2%;
    float: left;

}

</style>
</head>
<body>

<div class="container-fluid">
        <div class="logo text-center">
            <img src="image/banner.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="300px"> 
        </div>
        
       <form method="get" action="processfemale.php">
            <input type="hidden" name="nim" value="<?php echo $_SESSION['nim'];?>">
            <div id="dialog-confirm" title="Are you sure?">
                <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Are you sure you want to vote for this candidate?</p>
            </div>
            <?php
            $gender = 'female';

            if($gender=='female'){
             
                $femaleName= array('Lora','Naomi Ginting','Corina Sudjono','Angellyne Chanlie','Jackline','Angellia Chairiana','Tiffany Simon','Duangkamon','Tiffany','Faustine');
                $femaleImage= array('image/final/02.png','image/final/03.png','image/final/04.png','image/final/07.png','image/final/08.png','image/final/09.png','image/final/10.png','image/final/13.png','image/final/14.png','image/final/17.png');
                $femalevoteid=array(2,3,4,7,8,9,10,13,14,17);
                $resultName = count($femaleName);
                $resultImage=count($femaleImage);

                //candidate 1
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[0]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/02.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[0]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[0]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>  ";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 2
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[1]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/03.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[1]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[1]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 3
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[2]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/04.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[2]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[2]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 4
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[3]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/07.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[3]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[3]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 5
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[4]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/08.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[4]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[4]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 6
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[5]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/09.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[5]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[5]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 7
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[6]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/10.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[6]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[6]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 8
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[7]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/13.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[7]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[7]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 9
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[8]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/14.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[8]."</label>";
                echo" <button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[8]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                //candidate 10
                echo"<div class='candidate'>";
                echo"<div class='container'>";
                echo"<div class='row'>";
                echo"<div class='col-xs-4'>";
                echo" <img src='".$femaleImage[9]."' class='img-responsive img-center ' alt='Responsive image' width='180px' height='180px' style='margin-top:2%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-3'>";
                echo" <img src='image/number/17.png' class='img-responsive img-center' alt='Responsive image' width='100px' height='100px' style='margin-top:20%;margin-left:30%;'> ";
                echo"</div>";
                echo"<div class='col-xs-5'>";
                echo"<a style='margin-top:30%;'></a>";
                echo"<label style='margin-top:13%;margin-left:-1%;'><a style='color:#D4AF37;font-size:16px;'>".$femaleName[9]."</label>";
                echo"<button class='btn btn-lg btn-primary btn-sm btn-block' name='femalevoteid' value='".$femalevoteid[9]."' type='submit' style='margin-left:-1%;font-size:13px;'>VOTE</button>";
                echo"</div>";
                echo"</div>";
                echo"</div>";
                
          }
          ob_end_flush();
          ?>            
        </form>
        <div class="footer text-center">
            <img src="image/footer.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>
</div>
</body>
</html>                                     