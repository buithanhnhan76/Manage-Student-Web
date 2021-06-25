<?php

include 'connectdb.php';

$sql = "
select malop
from LOP 
where siso < (
select giatri
from THAMSO
where mathamso = 'SSTĐ'
)
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "&nbsp&nbsp <input type='radio' id='" .$row['malop'] ."' name='malop' onchange='choseClass(this.value)' value='" .$row['malop'] ."'/> <label for='" .$row['malop'] ."'>" .$row['malop'] ."</label> <br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>