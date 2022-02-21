<?php 

	function connect(){
		$server = "localhost";
		$username = "root";
		$password = "";
		$database = "isproject1";

		//Database Connection
		$conn = mysqli_connect($server,$username,$password,$database);
		if(!$conn){
			die("Connection Not Successful");
		}
		
		return $conn;
	}
	//$result=connect();

	//Function for inserting data
	function InsertData($sql){
		//Get Link from Connect
		$link = connect();

		//Insert into DB
		if(mysqli_query($link,$sql)){
			//echo "Insert Works";
		}else{
			die("Error Inserting Data");
		}
	}
	//Function for getting data
	function GetData($sql){
		$link = connect();
		$returned_results = array();
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				$returned_results[] = $row;
			}
		}
		return $returned_results;
	} 

	//Function for hash password
	function hashPassword($password){
		//Md5 method 
		//return md5($password);
		//SHA1 method
		$salt="&!210zxr.-#";
		$salted_password=$salt.$password.$salt;
		return sha1($salted_password);

	}
?>