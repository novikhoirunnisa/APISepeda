<?php
	$id = $_POST['id'];
	$con = mysqli_connect("localhost","root","","dbsepeda");
	$sql = "DELETE FROM tbsepeda where id = $id";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>