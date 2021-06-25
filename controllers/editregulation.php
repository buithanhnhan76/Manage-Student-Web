<?php
    include "connectdb.php";
    $action = $_POST["action"];
    // echo "$action";
    // die();

    // Edit Reulation
    if ($action == "editRegulation")
    {
        $mathamso = $_POST['mathamso'];
        $giatri = $_POST['giatri'];
        $sql = "update THAMSO set giatri = '$giatri' where mathamso = '$mathamso';" ;
        // echo "$sql";
        // die();
        pushDataToDB($conn, $sql);
        $conn->close();
    }
    // delete regulation
    elseif ($action == "deleteRegulation")
    {
        $mathamso = $_POST['mathamso'];
        $sql = "delete from THAMSO where mathamso ='$mathamso'";
            pushDataToDB($conn, $sql);
            $conn->close();
    }
    // Increase Subject
    elseif ($action == "increaseSubject")
    {
        $mamonhoc = $_POST['mamonhoc'];
        $tenmonhoc = $_POST['tenmonhoc'];
        $sql = "insert into MONHOC values ('$mamonhoc', '$tenmonhoc')" ;
        // echo "$sql";
        // die();
        pushDataToDB($conn, $sql);
        $conn->close();
    }

    // Edit Subject
    elseif ($action == "editSubject")
    {
        $mamonhoc = $_POST['mamonhoc'];
        $tenmonhoc = $_POST['tenmonhoc'];
        $sql = "update MONHOC set tenmonhoc = '$tenmonhoc' where mamonhoc = '$mamonhoc';" ;
        // echo "$sql";
        // die();
        pushDataToDB($conn, $sql);
        $conn->close();
    }

    // Delete Subject
    elseif ($action == "deleteSubject")
    {
        $mamonhoc = $_POST['mamonhoc'];
        $sql = "delete from PHIEUDIEM where mamonhoc ='$mamonhoc'";
        if ($conn->query($sql) === TRUE) {
            $sql = "delete from MONHOC where mamonhoc ='$mamonhoc'";
            pushDataToDB($conn, $sql);
            $conn->close();
        }else {
            $conn->close();
        }
    }
      // Increase Class
      elseif ($action == "increaseClass")
      {
          $malop = $_POST['malop'];
          $tenlop = $_POST['tenlop'];
          $sql = "insert into lop(malop,tenlop) values ('$malop', '$tenlop')" ;
          // echo "$sql";
          // die();
          pushDataToDB($conn, $sql);
          $conn->close();
      }
     // Edit Class
     elseif ($action == "editClass")
     {
         $malop = $_POST['malop'];
         $tenlop = $_POST['tenlop'];
         $sql = "update LOP set tenlop = '$tenlop' where malop = '$malop';" ;
         // echo "$sql";
         // die();
         pushDataToDB($conn, $sql);
         $conn->close();
     }
    // delete Class
    elseif ($action == "deleteClass")
    {
        $malop = $_POST['malop'];
        $sql = "
        delete from PHIEUDIEM where PHIEUDIEM.mahocsinh in (
            select distinct mahocsinh
            from HOCSINH, LOP
            where LOP.malop = HOCSINH.malop
            and LOP.malop = '$malop'
        )
        ";
        if($conn->query($sql) === TRUE)
        $sql = "delete from HOCSINH where malop ='$malop'";
        if ($conn->query($sql) === TRUE) {
            $sql = "delete from LOP where malop ='$malop'";
            pushDataToDB($conn, $sql);
            $conn->close();
        }else {
            $conn->close();
        }
    }

    function pushDataToDB ($conn, $sql)
    {
        if ($conn->query($sql) === TRUE) {
            echo "
                <div class='container'>
                    <div class='text-center'><h2>Chỉnh Sửa Thành Công</h2></div>
                    <div class='text-center'>
                        <form action='regulation.php'>
                            <input type='submit' value='Quay lại'>
                        </form>
                    </div>
                </div>
            ";
        } else {
            echo "
                <div class='container'>
                    <div class='text-center'><h2>Chỉnh Sửa Thất Bại</h2></div>
                    <div class='text-center'>
                        <form action='regulation.php'>
                            <input type='submit' value='Quay lại'>
                        </form>
                    </div>
                </div>
            ";
        }
    }
?>