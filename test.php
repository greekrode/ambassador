<?php
set_time_limit(0);

	for($i =1 ;$i<=1500;$i++){
		$id[$i] =random_int(10000,99999);
		$test[$i] = bin2hex(random_bytes(3));
		$test[$i] = substr($test[$i],0,5);
			if($i <=700){
				$test[$i] = $test[$i] ."0";
			}else{
				$test[$i] = $test[$i] ."1";
			}

		}	
	$vals1 = array_count_values($id);
	$vals2 = array_count_values($test);
	echo 'No. of NON Duplicate Items: '.count($vals1).'<br><br>';
	echo 'No. of NON Duplicate Items: '.count($vals2).'<br><br>';
	if(count($id) == 1500 && count($vals) == 1500){
		require_once 'connect.php';
		for($i = 1;$i<=1500;$i++){
		$query = $conn -> prepare("Insert into user values (:nim, :password)");
		$query ->bindParam(':nim',$id[$i]);
		$query ->bindParam(':password',$test[$i]);
		$query->execute();
	}
	}

?>