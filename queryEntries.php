<?php
//Connect to database
$conn=mysqli_connect('sophia.cs.hku.hk', 'h3523520', 'FuDMbGLZ') or die('Error! '. mysqli_error($conn));
//Select database
mysqli_select_db($conn, 'h3523520') or die('Error! '. mysqli_error($conn));
//Construct your SQL query here
$query = 'select * from stockList';
//Execute SQL query
$result = mysqli_query($conn, $query) or die('Error! '. mysql_error($conn));
while($row = mysqli_fetch_array($result)) {
        print "<div id=".$row['id'].">";
        print "<span>".$row['status']."</span><h3>".$row['stockname']."(".$row['category'].")</h3>";
        print "</div>";
}
?>
