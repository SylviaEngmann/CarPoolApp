<?php

		//check if there isn't a poolid
		if(!isset($_REQUEST['poolid'])){
			echo '{"result":0,"message":"poolid is not provided"}';
			return;
		}
		//otherwise set  all the values entered into variables
		$poolid=$_REQUEST['poolid'];
		$departure=$_REQUEST['departure'];
		$destination=$_REQUEST['destination'];
		$number=$_REQUEST['number'];
		$datedetails=$_REQUEST['datedetails'];
		$price=$_REQUEST['price'];
		$creator=$_REQUEST['creator'];

        //the code below is to test if the firstname has been entered
		// test code echo "the firstname is".$firstname;
		
		include_once("pool.php");
		$obj=new pool();

		$r=$obj->addPool($poolid,$departure,$destination,$number,$datedetails,$price,$creator);
		if($r==false){
			echo '{"result":0,"message":"Pool not created"}';

		}else{
			echo '{"result":1,"message":"Pool created"}';
		
		}	
?>

