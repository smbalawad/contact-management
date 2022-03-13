<?php
include './dbconnect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO register_tbl (`name`,`email`,`mobile`) VALUES ('$name','$email','$mobile')";
if($conn->query($sql)===TRUE){
    echo ("<script>
    window.alert('Register success');
    window.location.href='./register_form.php';
        </script>");

}else{
    echo "Error:".$sql. "<br>".$conn->error;
}

?>