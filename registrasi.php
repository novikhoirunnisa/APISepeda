<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$alamat = $_POST['alamat'];
	$noktp = $_POST['noktp'];
	$con = mysqli_connect("localhost","root","","dbsepeda");
	$sql = "INSERT INTO tbuser (email  , password , nama , nohp , alamat , noktp, role_user) VALUES ('$email', '$password', '$nama', '$nohp', '$alamat' ,'$noktp', '2')";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>