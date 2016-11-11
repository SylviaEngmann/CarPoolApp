<?php
/**
*/
include_once("adb.php");
/**
*Pool class
*/
class news extends adb{
	function news(){
	}
	/**
	*Adds news
	*@param string news news feed
	*/

    /*This function takes in the entered parameters and enters them in the database*/
	function addNews($news){
		$strQuery="insert into news (news)
						VALUES('$news')";
		return $this->query($strQuery);
	}

	/**
	*gets pool records based on the filter
	*@param string mixed condition to filter. If  false, then filter will not be applied
	*@return boolean true if successful, else false
	*/
	function getNews($filter=false){
		$strQuery="select * from news";
		if($filter!=false){
			$strQuery=$strQuery . " where $filter";
		}
		return $this->query($strQuery);
	}
}
?>
