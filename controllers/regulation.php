<?php
include 'checkloginstatus.php';
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
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">;
</head>

<body>
    <a href="../index.php" class="float-right border border-success m-3 p-2">Về màn hình chính</a>
    <div class="container mt-5">
        <h2 class="d-inline-block border border-success p-2 mb-4">Danh Sách Các Quy Định Hiện Có</h2>
    </div>
</body>

</html>
<?php
include 'connectdb.php';

$sql = "SELECT * FROM  THAMSO";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
    <br>
    <div class='container'>
    <table class='table table-bordered table-hover'>
    <thead>
    <tr class='table-secondary'>
        <th>Mã Tham Số</th>
        <th>Tên Tham Số</th>
        <th>Giá Trị</th>
        <th>Ghi Chú</th>
    </tr>
    </thead>
    <tbody>
    ";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "
    <tr>
        <td>" . $row['mathamso'] . "</td>
        <td>" . $row['tenthamso'] . "</td>
        <td>" . $row['giatri'] . "</td>
        <td>" . $row['ghichu'] . "</td>
    </tr>
    ";
    }
    echo"
    </tbody>
    </table>
    <br>
    <h3>Chỉnh Sửa Quy Định </h3> 
    <form action='regulation.php' method='POST'>
        <label for='mathamso'>Mã Tham Số: </label>
        <br>
        <input type='text' name='mathamso' required/>
        <br>
        <label for='tenthamso'>Tên Tham Số: </label>
        <br>
        <input type='text' name='tenthamso'required/>
        <br>
        <label for='giatri'>Giá Trị: </label>
        <br>
        <input type='text' name='giatri' required/>
        <br>
        <label for='ghichu'>Ghi Chú: </label>
        <br>
        <input type='text' name='ghichu' required/>
        <br><br>
        <button type='submit' class='btn btn-primary'>Cập Nhật</button>
    </form>
    </div>
    ";
} else {
    echo "0 results";
}
if(isset($_POST['mathamso'])){
    include 'connectdb.php';
    $mathamso = $_POST['mathamso'];
    $tenthamso = $_POST['tenthamso'];
    $giatri = $_POST['giatri'];
    $ghichu = $_POST['ghichu'];

    $sql = "update THAMSO
    set mathamso = '$mathamso', tenthamso = '$tenthamso', giatri='$giatri', ghichu='$ghichu'
    where mathamso = '$mathamso';
    ";
    if ($conn->query($sql) === TRUE) {
      echo "<h4 class='m-3 p-3 d-inline-block alert alert-success'>Sửa Thành Công <i class='fas fa-check-square'></i> </h4><br>";
      echo "<h4 class='m-3 p-3 d-inline-block alert alert-success'>Vui Lòng Reload Loại Website <i class='fas fa-check-square'></i> </h4>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
  }
$conn->close();
?>