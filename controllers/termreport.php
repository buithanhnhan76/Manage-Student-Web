<?php
include 'checkloginstatus.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo cáo kết quả học kỳ</title>
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
    <link rel="stylesheet" href="../css/style.css">;
</head>

<body>
    <a href="../index.php" class="float-right border border-success m-3 p-2">Về màn hình chính</a>
    <div class="container mt-5">
        <h3 class="d-inline-block border border-success p-2">Vui lòng chọn học kỳ</h3>
        <form action="termreport.php" method="POST">
            <br>
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Danh Sách Học Kỳ
                </button>
                <div class="dropdown-menu">
                    <?php include 'generateterm.php' ?>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Xem</button>
        </form>
    </div>
</body>

</html>
<?php
// if form has submited then ...
if (isset($_POST['mahocky'])) {
    include 'connectdb.php';
    $mahocky = $_POST['mahocky'];

    $sql = "select l.malop, l.siso, COUNT(hs.mahocsinh) as 'Số lượng đạt', (COUNT(hs.mahocsinh)/l.siso)*100 as 'Tỉ lệ %'
    from LOP l, HOCSINH hs
    where l.malop = hs.malop
    and hs.mahocsinh not in (
    select distinct hs.mahocsinh
    from PHIEUDIEM pd
    where pd.mahocsinh = hs.mahocsinh
    and (pd.diem15p + pd.diem1t * 2 + pd.diemcuoiky * 5)/8 < (
        select giatri
        from THAMSO
        where THAMSO.mathamso = 'ĐĐM'
    )
    )
    group by l.malop
    ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
        <div class='container'>
        <h3 class='text-center'>Báo cáo tổng kết học kỳ</h3>
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
        echo "
    </tbody>
    </table>
    </div>
    <footer class='text-center'>Copyright &copy 2021 University Of Information And Technology. </footer>
    <br>
    ";
    } else {
        echo "0 results";
    }
    $conn->close();
}
?>