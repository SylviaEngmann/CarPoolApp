<?php
/**
*/
include_once("adb.php");
/**
*Pool class
*/
class pooljoin extends adb{
	function pooljoin(){
	}
	/**
	*Adds a new pool
	*@param int pid pool id
	*@param string departure place of departure
	*@param string destination place of destination
	*@param int number number of people needed
	*@param datetime datedetails date and time of departure
	*@param decimal price cost of travel
	*@param string creator the creator of the pool
	*@return boolean returns true if successful or false
	*/

    /*This function takes in the entered parameters and enters them in the database*/
	function joinPool(){
		$strQuery="insert into pool
						(pid,departure,destination,numberneeded,datedetails,price,username)
						VALUES('$poolid','$departure','$destination','$number','$datedetails','$price','$creator')";
		return $this->query($strQuery);
	}

	/**
	*gets pool records based on the filter
	*@param string mixed condition to filter. If  false, then filter will not be applied
	*@return boolean true if successful, else false
	*/
	function getJoin($filter=false){
		$strQuery="select * from pooljoin";
		if($filter!=false){
			$strQuery=$strQuery . " where $filter";
		}
		return $this->query($strQuery);
	}
}
?>
