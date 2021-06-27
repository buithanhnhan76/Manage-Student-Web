<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../login.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Người Dùng</title>
     <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c9801e10cc.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">;
    <!-- javascript -->
    <script src="../js/javascript.js"></script>
</head>
<body>
  <div id="div-inform" class="m-3 p-3 alert alert-success" style="display: none"><i class="fas fa-times" style="line-height: 2; float: right" onclick="closeDivInform()"></i></div>
  <a href="../index.php" class="float-right d-inline-block border border-success rounded p-3 m-3">Về màn hình chính</a>
  <div class="container mt-5">
    <h2 class="d-inline-block p-3 mb-4">Tạo Người Dùng Mới </i></h2>
    <form action="adduser.php" method="POST" class="border border-success rounded p-4">
        <div class="form-group">
          <label for="username">Tên người dùng:</label>
          <input type="text" class="form-control" placeholder="Điền tên người dùng" name="username" required>
        </div>
        
        <div class="form-group">
          <label for="password">Mật khẩu <i class="fas fa-address-card"></i> :</label>
          <input type="text" class="form-control" placeholder="Điền mật khẩu người dùng" name="password" required>
        </div>
        <div class="form-group">
          <label for="email">Email <i class="fas fa-envelope"></i> :</label>
          <input type="email" class="form-control" placeholder="Điền email " name="email" required>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Đăng kí</button>
        <a href="../index.php" class="btn btn-secondary">Quay lại</a>
      </form>
</div>
<footer class="text-center m-4">Copyright &copy 2021 University Of Information And Technology. </footer>
</body>
</html>
<?php
  // if form has submited then ...
  if ( isset($_POST['username']))
  {
    include 'connectdb.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    //select Max and Min Age from database
    $sql = "select giatri from THAMSO where mathamso = 'TTĐ';";
    $result = $conn->query($sql);


    $sql = "INSERT INTO nguoidung(username, password, email)
    VALUES ('$username', '$password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script type="text/JavaScript">
              document.getElementById("div-inform").innerHTML += "Thêm Mới Người Dùng Thành Công";
              document.getElementById("div-inform").style.display = "block";
            </script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  }
?>