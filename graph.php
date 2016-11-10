<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>Result</title>
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

  .wrapper{
    margin-left: -50px;
    margin-bottom: 20px;
    height:350px;
    position:relative;
    width: 470px;
  }

.wrapper img{
    height:auto;
    width:auto;
    max-height: 50px;
    max-width: 50px;
    margin-left:-15px;
    margin-top:-40px;
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
.rectangle1{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: chartone 3s ease forwards;

  <?php
    $query = $conn->prepare("select count(*) as countone from voting where voting1= '1'");

    $result =  $query->execute();
    if(!$result){
        die("error query");
      }else{
    $rows = $query->fetchColumn();
    $x[1] = $rows;
    
    }
    ?>  
  }

  

  .rectangle2{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: charttwo 3s ease forwards;

  <?php
    $query = $conn->prepare("select count(*) as counttwo from voting where voting1= '2'");

    $result =  $query->execute();
    if(!$result){
        die("error query");
      }else{
    $rows = $query->fetchColumn();
    $x[2] = $rows;
    
    }
    ?>  
  }


  .rectangle3{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: chartthree 3s ease forwards;

  <?php
    $query = $conn->prepare("select count(*) as countthree from voting where voting1= '3'");

    $result =  $query->execute();
    if(!$result){
        die("error query");
      }else{
    $rows = $query->fetchColumn();
    $x[3] = $rows;
    
    }
    ?>  
  }

  .rectangle4{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: chartfour 3s ease forwards;

  <?php
    $query = $conn->prepare("select count(*) as countfour from voting where voting1= '4'");

    $result =  $query->execute();
    if(!$result){
        die("error query");
      }else{
    $rows = $query->fetchColumn();
    $x[4] = $rows;
    
    }
    ?>  
  }

 
  .rectangle5{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: chartfive 3s ease forwards;

  <?php
    $query = $conn->prepare("select count(*) as countfive from voting where voting1= '5'");

    $result =  $query->execute();
    if(!$result){
        die("error query");
      }else{
    $rows = $query->fetchColumn();
    $x[5] = $rows;
    
    }
    ?>  
  }


  .rectangle6{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: chartsix 3s ease forwards;

    <?php
    $query = $conn->prepare("select count(*)as countsix  from voting where voting1= '6'");

    $result =  $query->execute();
    if(! $result)
    die("error query");

    $rows = $query->fetchColumn();
    $x[6] = $rows;
    ?>  
  }
 
  .rectangle7{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: chartseven 3s ease forwards;

    <?php
    $query = $conn->prepare("select count('*')as 'countseven'  from voting where voting1= '7'");

    $result =  $query->execute();
    if(! $result)
    die("error query");

    $rows = $query->fetchColumn();
    $x[7] = $rows;
    ?>  
  }


  .rectangle8{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: charteight 3s ease forwards;

    <?php
    $query = $conn->prepare("select count('*')as 'counteight'  from voting where voting1= '8'");

    $result =  $query->execute();
    if(! $result)
    die("error query");

    $rows = $query->fetchColumn();
    $x[8] = $rows;
    ?>  
  }

  .rectangle9{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: chartnine 3s ease forwards;

    <?php
    $query = $conn->prepare("select count('*')as 'countnine'  from voting where voting1= '9'");

    $result =  $query->execute();
    if(! $result)
    die("error query");

    $rows = $query->fetchColumn();
    $x[9] = $rows;
    ?>  
  }

  .rectangle10{
    position:absolute;
    bottom:0;
    width:20px;
    
    background-color:#C7AF51;
    margin:auto;
    animation: chartten 3s ease forwards;

    <?php
    $query = $conn->prepare("select count(*)as countten  from voting where voting1= '10'");

    $result =  $query->execute();
    if(! $result)
    die("error query");

    $rows = $query->fetchColumn();
    $x[10] = $rows;
    ?>  
  }

  <?php
  function berinama($tes){
    if($tes == 1){
      echo "Budi";
    }else if($tes == 5){
      echo "lima";
    }
  }
  function size($tes){
   global $big;
   if($tes >= 500 ){
    $big = 10;
   }else if($tes >= 250){
   $big = 15;
   }
   else{
   $big = 30;
   }
  }
  ?>
  @keyframes chartone{
    from{height:20px;}
    to{height: <?php 
    	if($x[1]==0)
    		echo '20px';
    	else
    		echo $x[1]*20 .'px';
    ?>
    }
  }
  @keyframes charttwo{
    from{height:20px;}
   to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[2]*$big .'px';
    ?>
    }
  }
 @keyframes chartfour{
    from{height:20px;}
    to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[4]*$big .'px';
    ?>
    }
  }  
  @keyframes chartfive{
    from{height:20px;}
    to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[5]*$big.'px';
    ?>
    }
  }
 @keyframes chartsix{
    from{height:20px;}
    to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[6]*$big .'px';
    ?>
    }
  }
  @keyframes chartseven{
    from{height:20px;}
    to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[7]*$big .'px';
    ?>
    }
  }
  @keyframes chartthree{
    from{height:20px;}
    to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[3]*$big .'px';
    ?>
    }
  }
    
  @keyframes charteight{
    from{height:20px;}
    to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[8]*$big .'px';
    ?>
    }
  }    
  @keyframes chartnine{
    from{height:20px;}
    to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[9]*$big .'px';
    ?>
    }
  }
    
  @keyframes chartten{
    from{height:20px;}
    to{height:
    <?php 
    	if($x[10]==0)
    		echo '20px';
    	else
    		echo $x[10]*$big.'px';
    ?>
    }
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
        <h1 class="text-center">The Favorite Male Winner of UPH Medan Ambassadors 2016 is <br> <?php echo berinama(array_search(max($x), $x));?></h1>
  <?php        
  	if (new DateTime() > new DateTime("2015-11-09 16:00:00")) {
		    echo 'kaninabo';
	}else{
        echo "<div class='wrapper'>";      
        echo "<div class='rectangle1' style='margin-left:0px'><img src='image/man.png'></div>";
        echo "<div class='rectangle2' style='margin-left:50px'><img src='image/man.png'></div>";
        echo "<div class='rectangle3' style='margin-left:100px'><img src='image/man.png'></div>";
        echo "<div class='rectangle4' style='margin-left:150px'><img src='image/man.png'></div>";
        echo "<div class='rectangle5' style='margin-left:200px'><img src='image/man.png'></div>";
        echo "<div class='rectangle6' style='margin-left:250px'><img src='image/man.png></div>";
        echo "<div class='rectangle7' style='margin-left:300px'><img src='image/man.png'></div>";
        echo "<div class='rectangle8' style='margin-left:350px'><img src='image/man.png'></div>";
        echo "<div class='rectangle9' style='margin-left:400px'><img src='image/man.png'></div>";
        echo "<div class='rectangle10' style='margin-left:450px'><img src='image/man.png'></div>";
        }
        echo "</div>";
      

?>
        <div class="footer text-center">
            <img src="image/footer.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>
</div>
</body>
</html>                                     