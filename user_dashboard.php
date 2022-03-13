<?php
session_start();
include './dbconnect.php';
include './links.php';

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
?>
<style>
    .card{
        width:400px;
    }
</style>
<div class="container mt-4">
    <h1>Logged In User:<?php echo $name;?></h1>
    <hr>
    <h2>Contact Form</h2>
        <div class="card">
            <div class="card-body">
                <form action="./db_conact.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="mobile">
                    </div>

                    <br>
                    <button class="btn btn-primary" type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>

    <!--form end-->

<div class="container mt-4">
    <h3>My Contact List</h3>

<?php

$sql = "SELECT * FROM contact_tbl WHERE id = '$id'";
$res = $conn->query($sql);
if($res->num_rows > 0){

    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Number</th>
      </tr>
    </thead>';
    while($row = $res->fetch_assoc()){

        echo '  <tbody>
        <tr>
          
          <td>'.$row['name'].'</td>
          <td>'.$row['email'].'</td>
          <td>'.$row['number'].'</td>
        </tr>
    
     
      </tbody>';
    }
    echo '</table>';
}else{
    echo "No Contacts Found";
}




?>


</div>


