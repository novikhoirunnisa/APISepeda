<?php
	if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $id = $_POST['id'];
    $username = $_POST['nama'];
    $email = $_POST['email'];
    $noktp = $_POST['noktp'];
    $notlp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    // $password = password_hash($password, PASSWORD_DEFAULT);

    $conn = mysqli_connect("localhost","root","","dbsepeda");

    $sql = "UPDATE tbuser SET nama='$username',email='$email',noktp='$noktp',nohp='$notlp', alamat='$alamat' WHERE id = '$id'";


    if( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}
?>