<?php
 $conn = mysqli_connect('localhost','root','','db_goa');
 if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_number = $_POST['user_number'];
	$user_location = $_POST['user_location'];
    $user_date = $_POST['user_date'];
    $user_jam = $_POST['user_jam'];
    $user_menit = $_POST['user_menit'];
    $user_waktu = $_POST['user_waktu'];
    $sql = $conn->prepare("INSERT INTO data_pesan(user_name, user_email, user_number, user_location, user_date,user_jam,user_menit,user_waktu) 
    VALUES('$user_name','$user_email','$user_number','$user_location','$user_date','$user_jam','$user_menit','$user_waktu')");
    $conn->beginTransaction();
    if(!mysqli_query($conn,$sql)){
        echo "Failed";
    }else{
        echo "Success";
        header("Location: login.html");
    }
 }
 $conn->null;
 

?>