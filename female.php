<?php
require_once"db.php";
$conn = konek_db();
?>

<!DOCTYPE html>
<html>
<head>
<link rel='shortcut icon' href='image/icon.ico' type='image/x-icon' />
	<title>Result : Female</title>
	<style>
	h1{
		opacity:0;
		transition: 3s;
	}
	.wrapper img{
		height:auto;
		width:auto;
		max-height: 100px;
		max-width: 100px;
		margin-left:-15px;
		margin-top:200px;
	}
	body{
		background-color:black;
		font-family:Trajan Pro;
	}
	a{
		transition:1s;
		color:white;
		letter-spacing:2px;
		text-decoration:none;
		font-size:20px;
	}
	a:hover{
		color:#F4EF84;
	}
	.wrapper{
		margin:auto;
		position:relative;
		width: 1125px;
	}
	.rectangle1{
		position:absolute;
		bottom:0;
		width:30px;
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartone 8s ease forwards;
		margin-left:20px;

	<?php
		$query = $conn->prepare("select count('*')as 'countone'  from voting where voting2= '2'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[1] =  $row['countone'];
		?>	
	}
	@keyframes chartone{
		from{height:0px;}
		to{height:
			<?php if($x[1] <= 40 )
							echo $x[1]*5;
					else
							echo $x[1]*1;
			?>px;}
	}

	.rectangle2{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: charttwo 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'counttwo'  from voting where voting2= '3'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[2] =  $row['counttwo'];
		?>	
	}
	@keyframes charttwo{
		from{height:0px;}
		to{height:
			<?php if($x[2] <= 40 )
							echo $x[2]*5;
					else
							echo $x[2]*1;
			?>px;}
	}

	.rectangle3{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartthree 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'countthree'  from voting where voting2= '4'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[3] = $row['countthree'];
		?>	
	}
	@keyframes chartthree{
		from{height:0px;}
		to{height:<?php if($x[3] <= 40 )
							echo $x[3]*5;
					else
							echo $x[3]*1;
			?>px;}
	}

	.rectangle4{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartfour 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'countfour'  from voting where voting2= '7'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[4] = $row['countfour'];
		?>	
	}
	@keyframes chartfour{
		from{height:0px;}
		to{height:<?php if($x[4] <= 40 )
							echo $x[4]*5 ;
					else
							echo $x[4]*1;
			?>px;}
	}

	.rectangle5{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartfive 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'countfive'  from voting where voting2= '8'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[5] = $row['countfive'];
		?>	
	}
	@keyframes chartfive{
		from{height:0px;}
		to{height:<?php if($x[5] <= 40 )
							echo $x[5]*5;
					else
							echo $x[5]*1;
			?>px;}
	}

	.rectangle6{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartsix 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'countsix'  from voting where voting2= '9'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[6] = $row['countsix'];
		?>	
	}
	@keyframes chartsix{
		from{height:0px;}
		to{height:<?php if($x[6] <= 40 )
							echo $x[6]*5;
					else
							echo $x[6]*1;
			?>px;}
	}

	.rectangle7{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartseven 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'countseven'  from voting where voting2= '10'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[7] = $row['countseven'];
		?>	
	}
	@keyframes chartseven{
		from{height:0px;}
		to{height:<?php if($x[7] <= 40 )
							echo $x[7]*7;
					else
							echo $x[7]*1;
			?>px;}
	}

	.rectangle8{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: charteight 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'counteight'  from voting where voting2= '13'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[8] = $row['counteight'];
		?>	
	}
	@keyframes charteight{
		from{height:0px;}
		to{height:<?php if($x[8] <= 40 )
							echo $x[8]*5;
					else
							echo $x[8]*1;
			?>px;}
	}
	.rectangle9{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartnine 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'countnine'  from voting where voting2= '14'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[9] = $row['countnine'];
		?>	
	}
	@keyframes chartnine{
		from{height:0px;}
		to{height:<?php if($x[9] <= 40 )
							echo $x[9]*5;
					else
							echo $x[9]*1;
			?>px;}
	}

	.rectangle10{
		position:absolute;
		bottom:0;
		width:30px;
		
		background:linear-gradient(0deg, #C7AF51 30%, #F5EF82 100%);
		margin:auto;
		animation: chartten 8s ease forwards;
		margin-left:20px;

		<?php
		$query = $conn->prepare("select count('*')as 'countten'  from voting where voting2= '17'");

		$result =  $query->execute();
		if(! $result)
		die("error query");

		$rows = $query -> get_result();
		$row = $rows->fetch_array();

		$x[10] = $row['countten'];
		?>	
	}
	@keyframes chartten{
		from{height:0px;}
		to{height:<?php if($x[10] <= 40 )
							echo $x[10]*5;
					else
							echo $x[10]*1;
			?>px;}
	}
	</style>
</head>
<body>

<center>
		<div class="logo">
			<img src="image/login-01.png" style="margin:auto;margin-top:20px;">
		</div>
		<div class="header">
			<img src="image/png-02.png" style="margin:auto;margin-top:20px;">
		</div>
</center>

	<div class="wrapper" >

	<div class="winner">

    	<h1  id ='name' style='text-align:center;color:white;font-size:28px'>The Highest Vote of Favourite Female Ambassador 2016<br/><br/>
		<b style='color:#F4EF84'> <?php
		if(max($x) == 0)
			$x = "UPH Medan";
		else
		if(max($x) == $x[1])
			$x = "Lora";
		else
		if(max($x) == $x[2])
			$x = "Naomi Ginting";
		else
		if(max($x) == $x[3])
			$x = "Corina Sudjono";
		else
		if(max($x) == $x[4])
			$x = "Angellyne Chanlie";
		else
		if(max($x) == $x[5])
			$x = "Jackline";
		else
		if(max($x) == $x[6])
			$x = "Angellia Chairiana";
		else
		if(max($x) == $x[7])
			$x = "Tiffany Simon";
		else
		if(max($x) == $x[8])
			$x = "Duangkamon";
		else
		if(max($x) == $x[9])
			$x = "Tiffany";
		else
		if(max($x) == $x[10])
			$x = "Faustine";
		
		 echo $x; ?> </b></h1>		
 		 
	</div> 
	<div class="rectangle" style="width:30px;height:500px">
	<div class="rectangle1"></div>
	<br>
	<img src="image/number/02.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:125px;margin-top:-500px">
	<div class="rectangle2"></div>
	<br>
	<img src="image/number/03.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:250px;margin-top:-500px">
	<div class="rectangle3"></div>
	<br>
	<img src="image/number/04.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:375px;margin-top:-500px">
	<div class="rectangle4"></div>
	<br>
	<img src="image/number/07.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:500px;margin-top:-500px">
	<div class="rectangle5"></div>
	<br>
	<img src="image/number/08.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:625px;margin-top:-500px">
	<div class="rectangle6"></div>
	<br>
	<img src="image/number/09.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:750px;margin-top:-500px">
	<div class="rectangle7"></div>
	<br>
	<img src="image/number/10.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:875px;margin-top:-500px">
	<div class="rectangle8"></div>
	<br>
	<img src="image/number/13.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:1000px;margin-top:-500px">
	<div class="rectangle9"></div>
	<br>
	<img src="image/number/14.png" style="margin-bottom:-562px">
	</div>
	<div class="rectangle" style="width:30px;height:500px;margin-left:1125px;margin-top:-500px">
	<div class="rectangle10"></div>
	<br>
	<img src="image/number/17.png" style="margin-bottom:-562px">
	</div>

	</div>
	<center style="margin-top:140px"><a href="result.php">Next</a></center>
	<script>
		function opacity(){
			document.getElementById('name').style.opacity = "1";

		}
		setTimeout(opacity, 8000);
	</script>
</body>
</html>