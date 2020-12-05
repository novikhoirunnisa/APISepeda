<?php
    $email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect("localhost","root","","dbsepeda");
	$data = mysqli_query($con,"SELECT * from tbuser WHERE email = '$email' and password = '$password'");
	$row = mysqli_fetch_array($data,MYSQLI_ASSOC);
	$cek = mysqli_num_rows($data);
	if($cek > 0){
		$json["PAYLOAD"]["respon"]=true;
		$json["PAYLOAD"]["roleuser"]=$row["roleuser"];
		$json["PAYLOAD"]["email"]=$row["email"];
		$json["PAYLOAD"]["password"]=$row["password"];
	}else{
		$json["PAYLOAD"]["respon"]=false;
	}
	echo json_encode($json);
?>