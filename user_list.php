<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>test voting</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <script src="js/prefixfree.min.js"></script>

          <script src="js/scrollbar.js"></script>

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

h1{
  font-family: "Trajan Pro";
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(212, 175, 55,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

.btn-primary , .btn-primary:hover{
    background: #000 ;
    color: #D4AF37;
    border :1px solid #D4AF37;
}

@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: radial-gradient(circle, #202020,#000000);
    background-size:cover;
    width: 100%;
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(212, 175, 55,0.3);
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(212, 175, 55,0.3); 
}color: #fff;
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
            height: 200px;
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

        
        <h1 class="text-center">USER LIST</h1>
        <div  class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      <th>No.</th>
      <th>Username</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
  </thead>
</table>
</div>
<div  class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php
      $query = $conn -> prepare('SELECT * from user');
      $query -> execute();
      $i = 1;
        foreach ($query as $user) {
          echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>".$user['nim']."</td>";
          echo "<td>".$user['password']."</td>";
          echo "<td><a class='btn btn-lg btn-primary btn-block'  name='edit' value='edit' href='edit_data.php?nim=".$user['nim']."' class='action'>Edit</a></button> <a class='btn btn-lg btn-primary btn-block'  name='edit' value='edit' href='delete_data.php?nim=".$user['nim']."' class='action'>Delete</a></button></td>";
          echo "</tr>";
          $i++;

        }
    ?>
  </tbody>
</table>
</div>
</section>
       
        <div class="footer text-center">
            <img src="image/footer.png" class="img-responsive img-center" alt="Responsive image" width="500px" height="200px"> 
        </div>
</div>
</body>
</html>                                     