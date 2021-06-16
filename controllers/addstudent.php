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
    <title>Tiếp Nhận Học Sinh</title>
     <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</head>
<body>
  <div class="container mt-5">
    <h2>Tiếp nhận học sinh</h2>
    <form action="addstudent.php" method="POST">
        <div class="form-group">
          <label for="hoten">Họ và tên:</label>
          <input type="text" class="form-control" placeholder="Điền họ tên" name="hoten" required>
        </div>
        <div class="form-group">
          <label for="gioitinh">Giới tính:</label> <br>
          Nam: <input type="radio" name="gioitinh" value="nam" required>
          Nữ: <input type="radio" name="gioitinh" value="nữ" required>
        </div>
        <div class="form-group">
          <label for="ngaysinh">Ngày sinh:</label>
          <input type="date" class="form-control" name="ngaysinh" required>
        </div>
        <div class="form-group">
          <label for="diachi">Địa chỉ:</label>
          <input type="text" class="form-control" placeholder="Điền địa chỉ" name="diachi" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" placeholder="Điền email" name="email" required>
        </div>
        <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Lớp
        </button>
        <div class="dropdown-menu">
          <?php include'generateclass.php'?>
        </div>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Đăng kí</button>
      </form>
</div>
<footer class="text-center">Copyright &copy 2021 University Of Information And Technology. </footer>
</body>
</html>
<?php
  // if form has submited then ...
  if ( isset($_POST['hoten']))
  {
    include 'connectdb.php';
    $hoten = $_POST['hoten'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $malop = $_POST['malop'];

    $sql = "INSERT INTO HOCSINH(hoten, gioitinh, ngaysinh, diachi, email, malop)
    VALUES ('$hoten', '$gioitinh', '$ngaysinh', '$diachi', '$email', '$malop')";
    
    if ($conn->query($sql) === TRUE) {
      echo "Tiếp nhận học viên thành công";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  }
?>