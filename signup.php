<?php

	//echo '{"result":0,"message":"Hi there"}';

		//check if there isn't a firstname
		if(!isset($_REQUEST['firstname'])){
			echo '{"result":0,"message":"firstname is not provided"}';
			return;
		}
		//otherwise set  all the values entered into variables
		$firstname=$_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$telephone=$_REQUEST['phonenumber'];

        //the code below is to test if the firstname has been entered
		// test code echo "the firstname is".$firstname;
		
		include_once("users.php");
		$obj=new user();

		$r=$obj->addUser($firstname,$lastname,$username,$password,$telephone);
		if($r==false){
			echo '{"result":0,"message":"User not added"}';

		}else{
			echo '{"result":1,"message":"User added"}';
		
		}	
?>


