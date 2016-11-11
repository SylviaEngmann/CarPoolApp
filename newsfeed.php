<?php

		//check if there isn't news
		if(!isset($_REQUEST['newsfeed'])){
			echo '{"result":0,"message":"Theres no news"}';
			return;
		}
		//otherwise set  all the values entered into variables
		$news=$_REQUEST['news'];

		include_once("news.php");
		$obj=new news();
		$r->$obj->addNews($news);

		if($r==false){
			echo '{"result":0,"message":"News not added"}';

		}else{
			echo '{"result":1,"message":"News added"}';
		
		}	
	?>

