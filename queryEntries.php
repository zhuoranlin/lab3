<?php
//Connect to database
$conn=mysqli_connect('sophia.cs.hku.hk', 'h3523520', 'FuDMbGLZ') or die('Error! '. mysqli_error($conn));
//Select database
mysqli_select_db($conn, 'h3523520') or die('Error! '. mysqli_error($conn));
//Construct your SQL query here

$s = $_GET["value"];
if ($_GET["show"]=="all"){
	$query = 'select * from stockList;';
}
if ($_GET["show"]=="stockcode"){
	$query = "SELECT * FROM stockList WHERE stockcode = '$s';";
}
if ($_GET["show"]=="category"){
	$query = "SELECT * FROM stockList WHERE category = '$s';";
}

//Execute SQL query
$result = mysqli_query($conn, $query) or die('Error! '. mysql_error($conn));
while($row = mysqli_fetch_array($result)) {
        print "<div id=".$row['id'].">";
        print "<span onclick = \"changeState(this)\">".$row['status']."</span><h3>".$row['stockname']." (".$row['category'].")</h3><h5>(".$row['stockcode'].") on ".$row['date']."</h5>";
        print "</div>";
}

mysqli_close($conn);
?>
