<?php include("server1.php");?>
<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
  // Update the record
    $sno = $_POST["snoEdit"];
    $member = $_POST["memberEdit"];
    $date = $_POST["dateEdit"];
    $note = $_POST["noteEdit"];

  // Sql query to be executed
  $sql = "UPDATE `notes` SET `member` = '$member' , `date` = '$date', `note` = '$note' WHERE `notes`.`sno` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{
    $member = $_POST["member"];
    $date = $_POST["date"];
    $note = $_POST["note"];

  // Sql query to be executed
  $sql = "INSERT INTO `notes` (`member`, `date`,`note`) VALUES ('$member', '$date','$note')";
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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>iNotes - Notes taking made easy</title>

</head>

<body>
<?php if(isset($_SESSION['username'])): ?>
  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="trainerw.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="member">Member</label>
              <input type="text" class="form-control" id="memberEdit" name="memberEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" id="dateEdit" name="dateEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="note">Notes</label>
              <textarea class="form-control" id="noteEdit" name="noteEdit" rows="3"></textarea>
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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="/crud/logo.svg" height="28px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Welcome <strong style="color:white;"><?php echo $_SESSION['username']; ?></strong> <span class="sr-only">(current)</span></a>
         
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li> -->

      </ul>
      <form class="form-inline my-2 my-lg-0" >
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
        <a class="btn btn-outline-success my-2 my-sm-0" href="trainer.php?logout='1'" type="submit">Logout</a>
      </form>
    </div>
  </nav>

  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <div class="container my-4">
    <h2>Add a Member</h2>
    <form action="trainerw.php" method="POST">
      <div class="form-group">
        <label for="member">Member</label>
        <input type="text" class="form-control" id="member" name="member" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="note">Notes</label>
        <textarea class="form-control" id="note" name="note" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Register Member</button>
    </form>
  </div>

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Member</th>
          <th scope="col">Date</th>
          <th scope="col">Notes</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `notes`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['member'] . "</td>
            <td>". $row['date'] . "</td>
            <td>". $row['note'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>
  <hr>

  <?php endif ?>
	<?php if(!isset($_SESSION['username'])):?>
        <link rel="stylesheet" href="Style.css">
        <header>
        <div class="container">
            <div class="logo">
                <a href="trainer.php">TRAINER LOGIN NEEDED</a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#service">Services</a></li>
                    <li><a href="index.php#schedule">Schedule</a></li>
                    <li><a href="index.php#price">Price</a></li>
                    <li><a href="index.php#login">Login</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".ham-burger, .nav ul li a").click(function () {

                $(".nav").toggleClass("open")

                $(".ham-burger").toggleClass("active");
            })
        })
        $(".accordian-container").click(function () {
            $(".accordian-container").children(".body").slideUp();
            $(".accordian-container").removeClass("active")
            $(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
            $(this).children(".body").slideDown();
            $(this).addClass("active")
            $(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
        })

    </script>
    <?php endif?>
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
        member = tr.getElementsByTagName("td")[0].innerText;
        date = tr.getElementsByTagName("td")[1].innerText;
        note = tr.getElementsByTagName("td")[2].innerText;
        console.log(member, date, note);
        memberEdit.value = member;
        dateEdit.value = date;
        noteEdit.value = note;
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

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `trainerw.php?delete=${sno}`;
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
