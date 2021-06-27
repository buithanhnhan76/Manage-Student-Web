<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../login.html');
	exit;
}

if($_SESSION['id'] != 1){
    echo "
    <script> alert('Chỉ Có Tài Khoản Admin Mới Được Thay Đổi Quy Định');
    window.history.back(); 
    </script>  
";
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Quy Định</title>
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
    <!-- Javascript -->
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
    <div class="container mt-2">
        <h2 class="d-inline-block p-2 mb-2">Quy Định</h2>
    </div>
    <div class="container" style="display: flex;">
        <h4 class="text-center"><button onclick="showTableRegulation()" class="btn btn-success ml-2 mr-2">BẢNG THAM SỐ</button></h4>
        <h4 class="text-center"><button onclick="showTableSubject()" class="btn btn-success mr-2">BẢNG MÔN HỌC</button></h4>
        <h4 class="text-center"><button onclick="showTableClass()" class="btn btn-success mr-2">BẢNG LỚP</button></h4>
    </div>
</body>

</html>
<?php
include 'connectdb.php';

$sql = "SELECT * FROM  THAMSO";

$result = $conn->query($sql);

// Table THAMSO
if ($result->num_rows > 0) {
    echo "
    <br>
    <div class='container' id='divTableRegulation'>
        <h3 class='text-center'>BẢNG THAM SỐ</h3>
        <table class='table table-bordered table-hover regulation m-2'>
        <thead>
        <tr class='table-secondary'>
            <th style='vertical-align: middle; text-align: center;'>Mã Tham Số</th>
            <th style='vertical-align: middle; text-align: center;'>Tên Tham Số</th>
            <th style='vertical-align: middle; text-align: center;'>Giá Trị</th>
            <th style='vertical-align: middle; text-align: center;'>Ghi Chú</th>
        </tr>
        </thead>
        <tbody>
        ";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "
        <tr>
            <td style='vertical-align: middle; text-align: center;'>" . $row['mathamso'] . "</td>
            <td style='vertical-align: middle; text-align: center;'>" . $row['tenthamso'] . "</td>
            <td style='vertical-align: middle; text-align: center;'>" . $row['giatri'] . "</td>
            <td style='vertical-align: middle; text-align: center;'>" . $row['ghichu'] . "</td>
        </tr>
        ";
        }
        echo "
        </tbody>
        </table>
        <div class='editregulation regulation m-2 mt-5'>
            <h4 class='regulation mb-3'>SỬA BẢNG THAM SỐ</h4>
            <form id='thamso' action='editregulation.php' method='POST' style='margin-right: 1%'>
                <input type='hidden' name='action' value='editRegulation'>
                <label for='mathamso'>Sửa Tham Số: </label>
                <input type='text' placeholder='Mã tham số' name='mathamso' required/>
                <input type='text' name='giatri' placeholder='Giá trị' required/>
                <input type='submit' class='btn btn-primary' style='padding: 1.7px' value='Cập Nhật'>
            </form>
            <form action='editregulation.php' method='POST'>
                    <input type='hidden' name='action' value='deleteRegulation'>
                    <label>Xóa Tham Số: </label>
                    <input type='text' name='mathamso' placeholder='Mã TS' required/>
                    <input type='submit' class='btn btn-primary' style='padding: 1.7px' value='Cập Nhật'>
            </form>
        </div>
    </div>
    ";
} else {
    echo "0 results";
};

// Table MONHOC
$sql = "SELECT * FROM  MONHOC";
$result = $conn->query($sql);
$stt = 0;

if ($result->num_rows > 0) {
    echo "
    <div class='container' id='divTableSubject' style='display: none'>
        <h3 class='text-center'>BẢNG MÔN HỌC</h3>
        <table class='table table-bordered table-hover subject m-2'>
        <thead>
        <tr class='table-secondary'>
            <th style='vertical-align: middle; text-align: center;'>STT</th>
            <th style='vertical-align: middle; text-align: center;'>Mã Môn Học</th>
            <th style='vertical-align: middle; text-align: center;'>Tên Môn Học</th>
        </tr>
        </thead>
        <tbody>
        ";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $stt++;
            echo "
        <tr>
            <td style='vertical-align: middle; text-align: center;'>" . $stt . "</td>
            <td style='vertical-align: middle; text-align: center;'>" . $row['mamonhoc'] . "</td>
            <td style='vertical-align: middle; text-align: center;'>" . $row['tenmonhoc'] . "</td>
        </tr>
        ";
        }
        echo "
        </tbody>
        </table>
        <div class='editsubject subject m-2 mt-5'>
            <h4 class='regulation mb-3'>SỬA BẢNG MÔN HỌC</h4>
            <form action='editregulation.php' method='POST'>
                <input type='hidden' name='action' value='deleteSubject'>
                <label style='min-width: 33%'>Xóa Môn Học: </label>
                <input type='text' name='mamonhoc' style='width: 18%' placeholder='Mã môn học' required/>
                <input type='submit' class='btn btn-primary' style='padding: 1.7px' value='Cập Nhật'>
            </form>
            <form action='editregulation.php' method='POST'>
                <input type='hidden' name='action' value='increaseSubject'>
                <label style='min-width: 33%'>Thêm Môn Học: </label>
                <input type='text' name='tenmonhoc' style='width: 18%' placeholder='Tên môn học' required/>
                <input type='text' name='mamonhoc' style='width: 18%' placeholder='Mã môn học' required/>
                <input type='submit' class='btn btn-primary' style='padding: 1.7px; text-align: right' value='Cập Nhật'>
            </form>
            <form action='editregulation.php' method='POST'>
                <input type='hidden' name='action' value='editSubject'>
                <label style='min-width: 33%'>Sửa Tên Môn Học: </label>
                <input type='text' name='mamonhoc' style='width: 18%' placeholder='Mã môn học' required/>
                <input type='text' name='tenmonhoc' style='width: 18%' placeholder='Tên môn học' required/>
                <input type='submit' class='btn btn-primary' style='padding: 1.7px' value='Cập Nhật'>
            </form>
        </div>
    </div>
    ";
} else {
    echo "0 results";
}


// Table LOP
$sql = "SELECT * FROM  LOP";
$result = $conn->query($sql);
$stt = 0;

if ($result->num_rows > 0) {
    echo "
    <div class='container' id='divTableClass'  style='display: none'>
        <h3 class='text-center'>BẢNG LỚP</h3>
        <table class='table table-bordered table-hover m-2'>
            <thead>
            <tr class='table-secondary'>
                <th style='vertical-align: middle; text-align: center;'>STT</th>
                <th style='vertical-align: middle; text-align: center;'>Mã Lớp</th>
                <th style='vertical-align: middle; text-align: center;'>Tên Lớp</th>
            </tr>
            </thead>
            <tbody>
            ";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $stt++;
                echo "
            <tr>
                <td style='vertical-align: middle; text-align: center;'>" . $stt . "</td>
                <td style='vertical-align: middle; text-align: center;'>" . $row['malop'] . "</td>
                <td style='vertical-align: middle; text-align: center;'>" . $row['tenlop'] . "</td>
            </tr>
            ";
            }
            echo "
            </tbody>
        </table>
        <div class='editclass m-2 mt-5'>
            <h4 class='regulation mb-3'>SỬA BẢNG LỚP</h4>
            <form action='editregulation.php' method='POST'>
                <input type='hidden' name='action' value='deleteClass'>
                <label style='min-width: 23%'>Xóa Lớp: </label>
                <input type='text' name='malop' style='width: 18%' placeholder='Mã lớp' required/>
                <input type='submit' class='btn btn-primary' style='padding: 1.7px' value='Cập Nhật'>
            </form>
            <form action='editregulation.php' method='POST'>
                <input type='hidden' name='action' value='increaseClass'>
                <label style='min-width: 23%'>Thêm Lớp: </label>
                <input type='text' name='tenlop' style='width: 18%' placeholder='Tên lớp' required/>
                <input type='text' name='malop' style='width: 18%' placeholder='Mã lớp' required/>
                <input type='submit' class='btn btn-primary' style='padding: 1.7px; text-align: right' value='Cập Nhật'>
            </form>
            <form action='editregulation.php' method='POST'>
                <input type='hidden' name='action' value='editClass'>
                <label style='min-width: 23%'>Sửa Tên Lớp: </label>
                <input type='text' name='malop' style='width: 18%' placeholder='Mã lớp' required/>
                <input type='text' name='tenlop' style='width: 18%' placeholder='Tên lớp' required/>
                <input type='submit' class='btn btn-primary' style='padding: 1.7px' value='Cập Nhật'>
            </form>
        </div>
    </div>
    ";
} else {
    echo "0 results";
}
$conn->close();

// Form edit regulation
echo "
    <br>
    <footer class='text-center m-4' style='padding-top: 5%'>Copyright &copy 2021 University Of Information And Technology. </footer>
    <script  type='text/javascript'>
        function showTableRegulation() {
            document.getElementById('divTableRegulation').style.display = 'block';
            document.getElementById('divTableSubject').style.display = 'none';
            document.getElementById('divTableClass').style.display = 'none';
        };
        function showTableSubject() {
            document.getElementById('divTableRegulation').style.display = 'none';
            document.getElementById('divTableSubject').style.display = 'block';
            document.getElementById('divTableClass').style.display = 'none';
        };
        function showTableClass() {
            document.getElementById('divTableRegulation').style.display = 'none';
            document.getElementById('divTableSubject').style.display = 'none';
            document.getElementById('divTableClass').style.display = 'block';
        };
</script>
    "
?>

<!-- 
    Detail Form: 
     - Form edit Regulation: 123 - 132
     - Form edit Subject: 
        + delete: 134 - 139
        + increase: 140 - 146
        + edit: 147 - 153
-->