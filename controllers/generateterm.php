<?php

include 'connectdb.php';

$sql = "SELECT mahocky FROM HOCKY";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "&nbsp&nbsp" .$row['mahocky'] ." <input type='radio' name='mahocky' value='" .$row['mahocky'] ."'/> <br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>