<!-- database connection for member -->
<?php  
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "mlogin";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `members` WHERE `sr.no` = $sno";
    $result = mysqli_query($conn, $sql);
  }
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset( $_POST['snoEdit'])){
    // Update the record
      $sno = $_POST["snoEdit"];
      $fullname = $_POST["fullnameEdit"];
      $username = $_POST["usernameEdit"];
      $mail = $_POST["mailEdit"];
      $number = $_POST["numberEdit"];
      $lpassword = $_POST["lpasswordEdit"];
      $payment = $_POST["paymentEdit"];
      $validity = $_POST["validityEdit"];
    // Sql query to be executed
    $sql = "UPDATE `mlogin`.`members` SET `fullname` = '$fullname' , `username` = '$username' , `mail` = '$mail' , `number` = '$number' , `lpassword` = '$lpassword' , `payment` = '$payment' ,`validity` = '$validity' WHERE `members`.`sr.no` = $sno";
    $result = mysqli_query($conn, $sql);
    if($result){
      $update = true;
  }
  else{
      echo "We could not update the record successfully";
  }
  }
  else{
      $sno = $_POST["sno"];
      $fullname = $_POST["fullname"];
      $username = $_POST["username"];
      $mail = $_POST["mail"];
      $number = $_POST["number"];
      $lpassword = $_POST["lpassword"];
      $payment = $_POST["payment"];
      $validity = $_POST["validity"];
    // Sql query to be executed
    $sql = "INSERT INTO `mlogin`.`members` (`fullname`, `username`,`mail`, `number`,`lpassword`, `payment`,`validity`) VALUES (`$fullname`, `$username`,`$mail`, `$number`,`$lpassword`, `$payment`,`$validity`)";
    $result = mysqli_query($conn, $sql);
    if($result){ 
        $insert = true;
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    } 
  }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Info</title>

    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
</head>
<body>

 <!-- Edit Modal -->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Member Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="tmember.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="fullname">Fullname</label>
              <input type="text" class="form-control" id="fullnameEdit" name="fullnameEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="usernameEdit" name="usernameEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="mail">Mail</label>
              <input type="email" class="form-control" id="mailEdit" name="mailEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="number">Number</label>
              <input type="tel" class="form-control" id="numberEdit" name="numberEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="lpassword">Password</label>
              <input type="password" class="form-control" id="lpasswordEdit" name="lpasswordEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="payment">Payment</label>
              <input type="number" class="form-control" id="paymentEdit" name="paymentEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="validity">Validity</label>
              <input type="date" class="form-control" id="validityEdit" name="validityEdit" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your INFO has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your INFO has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your INFO has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>

<aside style="background:white; margin-right:70px; margin-left:100px; padding-top:0.5%; padding-bottom:0.5%;">
<div class="container my-4">
<strong style="font-size:30px;"><center>MEMBERS</center></strong>
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Fullname</th>
      <th scope="col">Username</th>
      <th scope="col">Mail.id</th>
      <th scope="col">Number</th>
      <th scope="col">Password</th>
      <th scope="col">Payment</th>
      <th scope="col">Validity</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql = "SELECT * FROM `members`";
      $result = mysqli_query($conn, $sql);
      $sno = 0;
      while($row = mysqli_fetch_assoc($result)){
        $sno = $sno + 1;
        echo "<tr>
        <th scope='row'>". $sno . "</th>
        <td>". $row['fullname'] . "</td>
        <td>". $row['username'] . "</td>
        <td>". $row['mail'] . "</td>
        <td>". $row['number'] . "</td>
        <td>". $row['lpassword'] . "</td>
        <td>". $row['payment'] . "</td>
        <td>". $row['validity'] . "</td>
        <td> <button class='edit btn btn-sm btn-primary' id=".$row['sr.no'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sr.no'].">Delete</button>  </td>
      </tr>";
    } 
      ?>
  </tbody>
</table>
<form action="rmember.php">
                        <button>Register Member</button>
                    </div>
                    </form>
                    <form action="adminw.php">
                        <button>Back</button>
                    </div>
                    </form>
</div>
</aside>

<hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        fullname = tr.getElementsByTagName("td")[0].innerText;
        username = tr.getElementsByTagName("td")[1].innerText;
        mail = tr.getElementsByTagName("td")[2].innerText;
        number = tr.getElementsByTagName("td")[3].innerText;
        lpassword = tr.getElementsByTagName("td")[4].innerText;
        payment = tr.getElementsByTagName("td")[5].innerText;
        validity = tr.getElementsByTagName("td")[6].innerText;
        
        console.log(fullname, username, mail, number, lpassword, payment, validity);
        fullnameEdit.value = fullname;
        usernameEdit.value = username;
        mailEdit.value = mail;
        numberEdit.value = number;
        lpasswordEdit.value = lpassword;
        paymentEdit.value = payment;
        validityEdit.value = validity;
        
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this INFO!")) {
          console.log("yes");
          window.location = `tmember.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>

    
</body>
</html>