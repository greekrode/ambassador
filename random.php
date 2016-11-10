<?php
  if(isLogin()){
    	if($_SESSION['nim'] == 'admin'){}
    	else{
    		die("Not Previlaged to see this page lul");
   	 }
    		}else{
    	die("<h1 class='text-center'>YOU ARE NOT PRIVILEGED TO SEE THIS PAGE</h1>");
   }
  ?> 	