<?php

include 'connectdb.php';

$sql = "SELECT tenmonhoc FROM MONHOC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "&nbsp&nbsp <input type='radio' id='" .$row['tenmonhoc'] ."' name='tenmonhoc' onchange='choseSubject(this.value)' value='" .$row['tenmonhoc'] ."'/> <label for='" .$row['tenmonhoc'] ."'>" .$row['tenmonhoc'] ."</label><br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>