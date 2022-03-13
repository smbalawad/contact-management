<?php
include './dbconnect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$id = $_POST['id'];

$sql = "INSERT INTO contact_tbl (`id`,`name`,`email`,`number`) VALUES ('$id','$name','$email','$mobile')";
if($conn->query($sql)===TRUE){
    echo ("<script>
    window.alert('Conatc created success');
    window.location.href='./user_dashboard.php';
        </script>");

}else{
    echo "Error:".$sql. "<br>".$conn->error;
}

?>