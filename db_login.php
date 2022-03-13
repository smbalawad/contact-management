<?php
session_start();
include './dbconnect.php';


$email = $_POST['email'];
$mobile = $_POST['mobile'];


$sql = "SELECT * FROM register_tbl WHERE email = '$email' AND mobile = '$mobile'";
$res = $conn->query($sql);
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        //echo "login success";
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] =$row['email'];
        $_SESSION['mobile'] = $row['mobile'];

        echo ("<script>
        window.location.href='./user_dashboard.php';
        </script>");

    }
}else{
    echo ("<script>
    window.alert('Please check email or password incorrect');
    window.location.href='./login_form.php';
    </script>");
}



?>