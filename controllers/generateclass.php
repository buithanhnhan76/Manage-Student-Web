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
    echo "&nbsp&nbsp" .$row['malop'] ." <input type='radio' name='malop' value='" .$row['malop'] ."'/> <br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>