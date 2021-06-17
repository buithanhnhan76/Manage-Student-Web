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
</head>
<body>
  <div class="container mt-5">
    <h2 class="d-inline-block">Vui lòng chọn môn học và học kỳ</h2>
    <a href="../index.php" class="float-right">Về màn hình chính</a>
    <form action="subjectreport.php" method="POST">
        <br>
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Danh Sách Môn Học
            </button>
            <div class="dropdown-menu">
                <?php include'generatesubject.php'?>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Danh Sách Học Kỳ
            </button>
            <div class="dropdown-menu">
                <?php include'generateterm.php'?>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Xem</button>
    </form>
</div>
<footer class="text-center">Copyright &copy 2021 University Of Information And Technology. </footer>
</body>
</html>
<?php
  // if form has submited then ...
  if ( isset($_POST['tenmonhoc']))
  {
    include 'connectdb.php';
    $tenmonhoc =$_POST['tenmonhoc'];
    $mahocky = $_POST['mahocky'];
    
    $sql = "select l.malop, l.siso, COUNT(hs.mahocsinh) as 'Số lượng đạt', (COUNT(hs.mahocsinh)/l.siso) * 100  as 'Tỉ lệ %' 
    from HOCSINH hs, PHIEUDIEM pd, HOCKY hk, LOP l, MONHOC mh 
    where hs.mahocsinh = pd.mahocsinh
    and pd.mahocky = hk.mahocky
    and	hs.malop = l.malop
    and pd.mamonhoc = mh.mamonhoc
    and	mh.tenmonhoc = '$tenmonhoc'
    and hk.mahocky = '$mahocky'
    and ((pd.diem15p + pd.diem1t * 2 + pd.diemcuoiky * 5)/8) >= 5
    group by l.malop
    ";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
        <div class='container'>
        <h3 class='text-center'>Báo cáo tổng kết môn</h3>
        <br>
        <table class='table table-bordered'>
        <thead>
        <tr>
            <th>Stt</th>
            <th>Lớp</th>
            <th>Sỉ số</th>
            <th>Số lượng đạt</th>
            <th>Tỉ lệ %</th>
        </tr>
        </thead>
        <tbody>
        ";
    // output data of each row
    $stt = 0;
    while($row = $result->fetch_assoc()) {
        $stt++;
        echo "<tr>";
        echo "<td>" .$stt ."</td>";
        echo "<td>" .$row['malop'] ."</td>";
        echo "<td>" .$row['siso'] ."</td>";
        echo "<td>" .$row['Số lượng đạt'] ."</td>";
        echo "<td>" .$row['Tỉ lệ %'] ."</td>";
        echo "</tr>";
    }
    echo "
    </tbody>
    </table>
    </div>
    ";
    } else {
    echo "0 results";
    }
    $conn->close();
}
?>