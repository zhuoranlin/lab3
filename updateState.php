<?php
//Connect to database
$conn=mysqli_connect('sophia.cs.hku.hk', 'h3523520', 'FuDMbGLZ') or die('Error! '. mysqli_error($conn));
//Select database
mysqli_select_db($conn, 'h3523520') or die('Error! '. mysqli_error($conn));
//Construct your SQL query here
$value = $_GET['value'];
$id = $_GET['id'];
$query = "UPDATE stockList SET status = '$value' WHERE id = '$id';";

//Execute SQL query
$result = mysqli_query($conn, $query) or die('Error! '. mysql_error($conn));
$query = "SELECT * FROM stockList WHERE id = '$id';";

//Execute SQL query
$result = mysqli_query($conn, $query) or die('Error! '. mysql_error($conn));

while($row = mysqli_fetch_array($result)) {
        print $row['status'];
}

mysqli_close($conn);

?>
