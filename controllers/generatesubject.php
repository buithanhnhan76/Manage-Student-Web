<?php

include 'connectdb.php';

$sql = "SELECT tenmonhoc FROM MONHOC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row['tenmonhoc'] ." <input type='radio' name='tenmonhoc' value='" .$row['tenmonhoc'] ."'/> <br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>