<?php
    $servername='localhost';
    $username='h77588vx_form';
    $password='Hello123';
    $dbname = "h77588vx_form";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
        }

$sql = "SELECT name, email, mobile FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "name: " . $row["name"]. " - email: " . $row["email"]. " " . $row["mobile"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>