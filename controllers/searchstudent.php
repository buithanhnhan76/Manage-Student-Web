<html>
    <head>
         <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    </head>
    <body>
    <br>
    <div class="container">
        <a href="../index.php" class="float-right">Về màn hình chính</a>
    </div>
  
    </body>
</html>
<?php
  // if form has submited then ...
  include 'checkloginstatus.php';

  if ( isset($_POST['searchstudent']))
  {
    include 'connectdb.php';
    $searchstudent = $_POST['searchstudent'];

    $sql = "select hs.hoten, hs.malop, AVG((pd.diem15p + pd.diem1t * 2 + pd.diemcuoiky * 5)/8 ) as TBHK1, hk2.TBHK2
    from HOCSINH hs, PHIEUDIEM pd, 
    (
        select hs.hoten, AVG((pd.diem15p + pd.diem1t * 2 + pd.diemcuoiky * 5)/8 ) as TBHK2
        from HOCSINH hs, PHIEUDIEM pd
        where hs.mahocsinh = pd.mahocsinh
        and hs.hoten = '$searchstudent'
        and pd.mahocky = 'hk2'
     ) as hk2
        where hs.mahocsinh = pd.mahocsinh
        and hs.hoten = hk2.hoten
        and hs.hoten = '$searchstudent'
        and pd.mahocky = 'hk1'
    ";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        echo "
        <br>
        <div class='container'>
        <h3 class='text-center'>Thông tin học viên</h3>
        <br>
        <table class='table table-bordered'>
        <thead>
        <tr>
            <th>Stt</th>
            <th>Họ tên</th>
            <th>Lớp</th>
            <th>TB HK1</th>
            <th>TB HK2</th>
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
        echo "<td>" .$row['malop'] ."</td>";
        echo "<td>" .$row['TBHK1'] ."</td>";
        echo "<td>" .$row['TBHK2'] ."</td>";
        echo "</tr>";
    }
    echo "
    </tbody>
    </table>
    </div>
    <footer class='text-center'>Copyright &copy 2021 University Of Information And Technology. </footer>
    ";
    } else {
    echo "0 results";
    }
    $conn->close();
}
?>