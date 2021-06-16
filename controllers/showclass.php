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
</head>
<body>
  <div class="container mt-5">
    <h2>Danh Sách Lớp</h2>
    <h3>Vui lòng chọn lớp có trong danh sách quản lý</h3>
    <form action="showclass.php" method="POST">
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Danh Sách Các Lớp
            </button>
            <div class="dropdown-menu">
                <?php include'generateclass.php'?>
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
  if ( isset($_POST['malop']))
  {
    include 'connectdb.php';
    $malop = $_POST['malop'];

    $sql = "select hoten, gioitinh, ngaysinh, diachi, email from HOCSINH where malop = '$malop'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
        <br>
        <table class='table table-bordered'>
        <thead>
        <tr>
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
    echo "
    </tbody>
    </table>
    ";
    } else {
    echo "0 results";
    }
    $conn->close();
}
?>