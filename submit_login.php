<?php
ob_start();
	require 'connect.php';
	
	if(new DateTime() > new DateTime("2016-11-09 16:00:00")){
	if (isset($_POST['nim']) && isset($_POST['password'])){
		$nim = $_POST['nim'];
		$password = $_POST['password'];
		$query = $conn -> prepare ('SELECT count(*) FROM user WHERE nim = :nim and password = :password');
		$query -> bindParam(':nim', $nim);
		$query -> bindParam(':password', $password);
		$query -> execute();
		$count = $query -> fetchColumn();
		var_dump($nim);
		if ($count > 0){
			if ($nim == 'admin'){
			$_SESSION['nim'] = $nim;
			header('Location:admin.php');
			 exit();
			}
			$query = $conn -> prepare('SELECT voting1 FROM voting WHERE nim = :nim');
			$query -> bindParam(':nim',$nim);
			$query -> execute();
			$f = $query->fetchColumn();
			$query = null;
			$query = $conn -> prepare('SELECT voting2 FROM voting WHERE nim = :nim');
			$query -> bindParam(':nim',$nim);
			$query -> execute();
			$g = $query->fetchColumn();
			
			if (($count > 0) && (($f > 0)&& ($g > 0))){ //sudah perna vote 2 2 nya
				header('Location:index.php');
				$_SESSION['flash'] = "Sorry, you have voted.";
			}else{
			$_SESSION['nim'] = $nim;
				//belum pernah ada id nya
				if(($f == 0) && ($g == 0)){ //belum pernah vote
				echo "masuk1";
				$query = $conn -> prepare('Insert into voting(nim,voting1,voting2)values(:nim,0,0)');
				$query->bindParam(':nim', $_SESSION['nim']);
				$result = $query->execute();
				header('Location:votemale.php');
				}else{ //sudah pernah vote sekali
				$_SESSION['nim'] = $nim;
				header('Location:votefemale.php');		
				}
			}
		}else{
			//redirect password salah
			header('Location:index.php');
			$_SESSION['flash'] = "Your username / password is wrong.";
		}
	}else{
		//redirect id pass ga ada (?)
		header('Location:index.php');
	}
}else{
	header('Location:cantVote.php');
}
	ob_end_flush();
?>