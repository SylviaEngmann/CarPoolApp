<?php

		//check if there isn't a username
		if(!isset($_REQUEST['username'])){
			echo '{"result":0,"message":"username is not provided"}';
			return;
		}
		//otherwise set  all the values entered into variables
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];

        //the code below is to test if the firstname has been entered
		// test code echo "the firstname is".$firstname;
	

		include_once("users.php");
		$obj=new user();
		$obj->getUserLogin($username,$password);

        $result = $obj->fetch();
        session_start();
        $_SESSION['uid']=$result['uid'];
                //load_profile($result['uid']);
        if(($result['username'] == $username)&&($result['password'] ==['password']))
        {
            echo '{"result":1,"message":"Login successful"}';
            
        }
         else{
                echo '{"result":0,"message":"Error username or password is wrong"}';
            }
	?>

