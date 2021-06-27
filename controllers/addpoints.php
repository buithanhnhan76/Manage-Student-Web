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
    <title>Nhập Điểm Học Sinh</title>
     <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c9801e10cc.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- javascript -->
    <script src="../js/javascript.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php">Quản Lý Học Sinh <i class="fas fa-school text-secondary"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Học Sinh
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../controllers/addstudent.php">Tiếp nhận học sinh</a>
            <a class="dropdown-item" href="../controllers/editstudent.php">Sửa thông tin học sinh</a>
            <a class="dropdown-item" href="../controllers/deletestudent.php">Xóa học sinh</a>
            <a class="dropdown-item" href="../controllers/addpoints.php">Nhập điểm học sinh</a>
            <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="../controllers/showclass.php">Danh sách lớp</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="../controllers/getthescoreboard.php">Nhận bảng điểm môn</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Báo cáo tổng kết
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../controllers/subjectreport.php">Báo cáo kết quả môn học</a>
            <a class="dropdown-item" href="../controllers/termreport.php">Báo cáo kết quả tổng kết học kỳ</a>
            <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="../controllers/regulation.php">Quy Định</a>
        </li>
        <?php
        session_start();
        if(isset($_SESSION['loggedin'])){ 
        echo "
          <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"
          .strtoupper($_SESSION['name']) ."
          </a>
          <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
            <a class='dropdown-item' href='../controllers/logout.php'>Đăng xuất <i class='fas fa-sign-out-alt'></i> </a>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='../controllers/adduser.php'>Tạo người dùng mới</a>
          </div>
      ";
        }
        else{
          echo "
            <li class='nav-item'>
              <a class='nav-link' href='login.html'>Đăng nhập</a>
            </li>
        ";
        }
        ?>
      </ul>
      <a href="../index.php" class="btn btn-outline-success my-2 my-sm-0">Về màn hình chính</a>
    </div>
  </nav>
  <div id="div-inform" class="m-3 p-3 alert alert-success" style="display: none"><i class="fas fa-times" style="line-height: 2; float: right" onclick="closeDivInform()"></i></div>
  <div class="container mt-2">
    <h2 class="d-inline-block p-3 mb-2">Nhập điểm học sinh</h2>
    <form action="addpoints.php" method="POST" class="border border-success rounded p-4">
        <div class="form-group">
          <label for="mamonhoc">Mã môn học:</label>
          <input type="text" class="form-control" placeholder="Điền mã môn học" name="mamonhoc" required>
        </div>
        <div class="form-group">
          <label for="mahocsinh">Mã học sinh:</label> <br>
          <input type="text" class="form-control" placeholder="Điền mã học sinh" name="mahocsinh" required>
        </div>
        <div class="form-group">
          <label for="mahocky">Mã học kỳ:</label>
          <br>
          <?php include'generateterm.php' ?>
        </div>
        <div class="form-group">
          <label for="diem15p">Điểm 15 phút:</label> <br>
          <input type="number" step="0.001" class="form-control" placeholder="Điền điểm 15 phút" name="diem15p" max="10" min="0" required>
        </div>
        <div class="form-group">
          <label for="diem1t">Điểm 1 tiết:</label> <br>
          <input type="number" step="0.001" class="form-control" placeholder="Điền điểm 1 tiết" name="diem1t" max="10" min="0" required>
        </div>
        <div class="form-group">
          <label for="diemcuoiky">Điểm cuối kỳ:</label> <br>
          <input type="number" step="0.001" class="form-control" placeholder="Điền điểm cuối kỳ" name="diemcuoiky" max="10" min="0" required>
        </div>        
        <br/>
        <button type="submit" class="btn btn-primary">Thêm</button>
      </form>
</div>
<footer class="text-center m-4">Copyright &copy 2021 University Of Information And Technology. </footer>
</body>
</html>
<?php
  // if form has submited then ...
  if ( isset($_POST['mamonhoc']))
  {
    include 'connectdb.php';
    $mamonhoc = $_POST['mamonhoc'];
    $mahocky = $_POST['mahocky'];
    $mahocsinh = $_POST['mahocsinh'];
    $diem15p = $_POST['diem15p'];
    $diem1t = $_POST['diem1t'];
    $diemcuoiky = $_POST['diemcuoiky'];


    $sql = "INSERT INTO PHIEUDIEM(mamonhoc, mahocsinh, mahocky, diem15p, diem1t, diemcuoiky)
    VALUES ('$mamonhoc', '$mahocsinh', '$mahocky', $diem15p, $diem1t, $diemcuoiky)";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script type="text/JavaScript">
              document.getElementById("div-inform").innerHTML += "Nhập điểm thành công";
              document.getElementById("div-inform").style.display = "block";
            </script>';
    } else {
      echo '<script type="text/JavaScript">
              document.getElementById("div-inform").innerHTML += "Nhập điểm thất bại. Vui lòng kiểm tra lại!";
              document.getElementById("div-inform").style.display = "block";
            </script>';
    }
    
    $conn->close();
  }
?>