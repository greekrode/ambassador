<?php
require_once 'connect.php';

?>

	<?php
	$j = 1;
	$k = 1;
		for($i = 1;$i<=20;$i++){
		
		$query = $conn->prepare("select count(*)as 'countone'  from voting where voting1= ?");
		$query ->bindParam(1,$i);
		$result =  $query->execute();
		$rows = $query -> fetchColumn();

		if($i == 1 || $i == 5 || $i == 6 || $i == 11 || $i == 12 || $i == 15 || $i == 16 || $i == 18 ||	 	$i == 19 || $i == 20){
		$x[$j] =  $rows;
		$j++;
		}
	}
		for($f = 1;$f<=20;$f++){
		$query = $conn->prepare("select count(*)as 'countone'  from voting where voting2= ?");
		$query ->bindParam(1,$f);
		$result =  $query->execute();
		$rows = $query -> fetchColumn();

		if($f == 2|| $f == 3 || $f == 4 || $f == 7 || $f == 8 || $f == 9 || $f == 10 || $f == 13 || $f == 14 || $f == 17){
		$x1[$k] =  $rows;
		$k++;
		}
}

?>	

	
<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' href='image/icon.ico' type='image/x-icon' />
	<title>Result</title>
	<style>
	img{
		max-height: 200px;
		max-width: 200px;
		height: auto;
		width: auto;
	}
	h1{
		font-size:30px;
		text-align:center;
		color:white;
		
	}
	h2{
		margin-top:50px;
		text-align:center;
		color:#F4EF84;
		font-size:30px;
		opacity:0;
		transition:3s;
	
	}
	body{
		background-color:black;
		font-family:Trajan Pro;
	}
	.wrapper{
		margin:auto;
		height:500px;
		position:relative;
		width: 1125px;
	}
	.winner{
		width:1125px;
		opacity:0;
		transition:5s;
	}
	.winner1{
		width:540px;
		float:left;
	}
	.winner2{
		width:540px;
		float:right;
	}
	.text-center{font-family: "Trajan Pro";
	  font-size: 24px;
	  font-style: normal;
	  font-variant: normal;
	  font-weight: 500;
	  color: #fff;
	  }
	
	
	</style>
</head>
<body>
	<center>
		<div class="logo">
			<img src="image/login-01.png" style="margin:auto;margin-top:20px;max-height:500px;max-width:500px">
		</div>
		<div class="header">
			<img src="image/png-02.png" style="margin:auto;margin-top:20px;max-height:500px;max-width:1000px">
		</div>
</center>
<?php
$res = 1;

		if(max($x) == 0){
			$x = "UPH Medan";
			$res = null;
			}
		else
		if(max($x) == $x[1]){
			$x = "Salvian Kumara";
                        $image = "01";}
		else
		if(max($x) == $x[2]){
			$x = "Derian Ottoman";
                        $image = "05";}
		else
		if(max($x) == $x[3]){
			$x = "Stevan Angestu";
                        $image = "06";}
		else
		if(max($x) == $x[4]){
			$x = "Denny";
                        $image = "11";}
		else
		if(max($x) == $x[5]){
			$x = "Diky Tanhari";
                        $image = "12";}
		else
		if(max($x) == $x[6]){
			$x = "Kevin";
                        $image = "15";}
		else
		if(max($x) == $x[7]){
			$x = "Wilbert Lauren";
                        $image = "16";}
		else
		if(max($x) == $x[8]){
			$x = "George Lie";
                        $image = "18";}
		else
		if(max($x) == $x[9]){
			$x = "Surya Anthony";
                        $image = "19";}
		else
		if(max($x) == $x[10]){
			$x = "Aris Mismoyo";
                        $image = "20";}
		
		 ?>

		 <?php
                 if(max($x1) == 0){
                        $x1 = "UPH Medan";
                        $res = null;
                        }
                else
		 if(max($x1) == $x1[1]){
			$x1 = "Lora";
                        $image1 = "02";}
		else
		if(max($x1) == $x1[2]){
			$x1 = "Naomi Ginting";
                        $image1 = "03";}
		else
		if(max($x1) == $x1[3]){
			$x1 = "Corina Sudjono";
                        $image1 = "04";}
		else
		if(max($x1) == $x1[4]){
			$x1 = "Angellyne Chanlie";
                        $image1 = "07";}
		else
		if(max($x1) == $x1[5]){
			$x1 = "Jackline";
                        $image1 = "08";}
		else
		if(max($x1) == $x1[6]){
			$x1 = "Angellia Chairiana";
                        $image1 = "09";}
		else
		if(max($x1) == $x1[7]){
			$x1 = "Tiffany Simon";
                        $image1 = "10";}
		else
		if(max($x1) == $x1[8]){
			$x1 = "Duangkamon";
                        $image1 = "13";}
		else
		if(max($x1) == $x1[9]){
			$x1 = "Tiffany";
                        $image1 = "14";}
		else
		if(max($x1) == $x1[10]){
			$x1 = "Faustine";
                        $image1 = "17";}

		 ?>



	<div class="wrapper">
		
		<h2 id="name">The Favourite Winners of UPH Medan Ambassadors 2016</h2>
		<br><br>
		<?php if(is_null($res)){
		echo "<h2  id='name1'><b style='font-size:50px'>NO RESULT</b></h2>";
		}else{
			echo "<h2 id='name1'><b  style='font-size:50px'>CONGRATULATIONS !</b></h2>";
			}
		?>
		

	<div class="winner" id="name2">

		<div class="winner1">
<?php if(is_null($res)){
}else{
	echo "<img src='image/final/".$image.".png' style='margin-left:325px'>";
	echo "<img src='image/number/".$image.".png' style='height:auto;width:auto;max-height:80px;max-width:80px;float:right;margin-top:21px;margin-right:50px'>";
	echo "<h1 style='margin-right:200px;margin-top:45px;font-size:38px;'>".$x."</h1>"; 
			 }
?>
		</div>
		<div class="winner2">
<?php if(is_null($res)){}else{		
	echo "<img src='image/final/".$image1.".png' style='margin-left:-100px'>";
	echo "<img src='image/number/".$image1.".png' style='height:auto;width:auto;max-height:80px;max-width:80px;float:left;margin-top:227px;margin-right:10px'>";
	echo "<h1 ' style='margin-right:200px;margin-top:45px;font-size:38px;width:500px'>".$x1."</h1>"; 
		}
?>
		</div>

	</div>

	</div>
	
	<script>
		function opacity(){
			document.getElementById("name").style.opacity = "1";

		}
		setTimeout(opacity, 1000);
		
		function opacity1(){
			document.getElementById("name1").style.opacity = "1";

		}
		setTimeout(opacity1, 4000);
		
		function opacity2(){
			document.getElementById("name2").style.opacity = "1";

		}
		setTimeout(opacity2, 8000);
	</script>
</body>
</html>