<?php
include 'checkloginstatus.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo cáo kết quả môn học</title>
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
        <h2 class="p-2 d-inline-block mb-2">Báo Cáo Tổng Kết Môn Học</h2> <br>
        <form action="subjectreport.php" method="POST" style="display: flex">
            <br>
            <div class="dropdown">
                <button type="button" id="subject" class="btn btn-light border-secondary dropdown-toggle" style="margin-right: 0.5rem" data-toggle="dropdown">
                    Danh Sách Môn Học
                </button>
                <div class="dropdown-menu">
                    <?php include 'generatesubject.php' ?>
                </div>
            </div>
            <br>
            <div class="dropdown">
                <button type="button" id="term" class="btn btn-light border-secondary dropdown-toggle" style="margin-right: 0.5rem" data-toggle="dropdown">
                    Danh Sách Học Kỳ
                </button>
                <div class="dropdown-menu">
                    <?php include 'generateterm.php' ?>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="margin-right: 0.5rem">Xem</button>
        </form>
    </div>
    
</body>

</html>
<?php
// if form has submited then ...
if (isset($_POST['tenmonhoc'])) {
    include 'connectdb.php';
    $tenmonhoc = $_POST['tenmonhoc'];
    $mahocky = $_POST['mahocky'];

    $sql = "select l.malop, l.siso, COUNT(hs.mahocsinh) as 'Số lượng đạt', (COUNT(hs.mahocsinh)/l.siso) * 100  as 'Tỉ lệ %' 
    from HOCSINH hs, PHIEUDIEM pd, HOCKY hk, LOP l, MONHOC mh
    where hs.mahocsinh = pd.mahocsinh
    and pd.mahocky = hk.mahocky
    and	hs.malop = l.malop
    and pd.mamonhoc = mh.mamonhoc
    and	mh.tenmonhoc = '$tenmonhoc'
    and hk.mahocky = '$mahocky'
    and ((pd.diem15p + pd.diem1t * 2 + pd.diemcuoiky * 5)/8) >= (
        select giatri 
        from THAMSO
        where THAMSO.mathamso = 'ĐĐM'
    )
    group by l.malop
    ";

    $result = $conn->query($sql);
    echo "
    <div class='container'>
    <br>
    <h3 class='text-center'>Báo Cáo Tổng Kết Môn " .$tenmonhoc .", " .strtoupper($mahocky) ."</h3>
    <br>
    <table class='table table-bordered table-hover'>
    <thead>
    <tr class='table-secondary'>
        <th>Stt</th>
        <th>Lớp</th>
        <th>Sỉ số</th>
        <th>Số lượng đạt</th>
        <th>Tỉ lệ %</th>
    </tr>
    </thead>
    <tbody>
    ";
    if ($result->num_rows > 0) {
        // output data of each row
        $stt = 0;
        while ($row = $result->fetch_assoc()) {
            $stt++;
            echo "<tr>";
            echo "<td>" . $stt . "</td>";
            echo "<td>" . $row['malop'] . "</td>";
            echo "<td>" . $row['siso'] . "</td>";
            echo "<td>" . $row['Số lượng đạt'] . "</td>";
            echo "<td>" . $row['Tỉ lệ %'] . "</td>";
            echo "</tr>";
        }
       
    } else {
        echo "
        <tr>
            <td colspan='6' class='text-center'>Không Có Dữ Liệu!</td>
        </tr>
        ";
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