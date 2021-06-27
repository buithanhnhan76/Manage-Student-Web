<?php
include 'checkloginstatus.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Lớp</title>
     <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c9801e10cc.js" crossorigin="anonymous"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
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
                Báo Cáo Tổng Kết
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
            <li class='nav-item'>
                <a class='nav-link' href='../controllers/logout.php'>Đăng xuất <i class='fas fa-sign-out-alt'></i></a>
            </li>
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
            <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>
        <a href="../index.php" class="btn btn-outline-success my-2 my-sm-0">Về màn hình chính</a>
        </div>
    </nav>
    <div class="container">
        <h2 class="d-inline-block p-2 mt-4">Xuất Danh Sách Lớp</h2>
        <form action="showclass.php" method="POST" style="display: flex">
            <div class="dropdown">
                <button type="button" id="class" class="btn btn-primary dropdown-toggle" style="margin-right: 0.5rem" data-toggle="dropdown">
                    Danh Sách Các Lớp
                </button>
                <div class="dropdown-menu">
                    <?php include'generateclass.php'?>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="margin-right: 0.5rem">Xuất</button>
        </form>
    </div>
</body>
</html>
<?php
  // if form has submited then ...
  if ( isset($_POST['malop']))
  {
    include 'connectdb.php';
    $malop = $_POST['malop'];

    $sql = "select hoten, gioitinh, ngaysinh, diachi, email from HOCSINH where malop = '$malop'";
    
    $result = $conn->query($sql);

    echo "
        <br>
        <div class='container'>
        <h3 class='text-center'>DANH SÁCH HỌC SINH LỚP " .$malop ."</h3>
        <table class='table table-bordered table-hover'>
        <thead>
        <tr class='table-secondary'>
            <th>Stt</th>
            <th>Họ tên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        ";
    // output data of each row
    $stt = 0;
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            $stt++;
            echo "<tr>";
            echo "<td>" .$stt ."</td>";
            echo "<td>" .$row['hoten'] ."</td>";
            echo "<td>" .$row['gioitinh'] ."</td>";
            echo "<td>" .$row['ngaysinh'] ."</td>";
            echo "<td>" .$row['diachi'] ."</td>";
            echo "<td>" .$row['email'] ."</td>";
            echo "</tr>";
        }
    }else {
        echo "<tr>";
        echo "<td colspan='6' class='text-center'>Danh sách trống</td>";
        echo "</tr>";
        }
    echo "
    </tbody>
    </table>
    </div>
    <footer class='text-center'>Copyright &copy 2021 University Of Information And Technology. </footer>
    <br>
    ";
    $conn->close();
}
?>