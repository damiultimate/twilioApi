
<!DOCTYPE html>
<html>
<head>
	<title>AD DETAILS</title>
<link rel="stylesheet" type="text/css" href="css/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

</head>
<body>




<?php
if(!isset($_GET['admin']) || $_GET['admin'] != 'damiultimate@@@'){
	die("You have been denied access to this page");
}
else{

if(isset($_POST["update"])){

$servername = "domain";
$username = "name";
$password = "password";
$dbname = "dbname";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET checked='true' WHERE checked='false'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} 
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


}



echo '<table class="w3-table w3-striped w3-bordered"> <tr> <th>name</th><th>email</th><th>service</th><th>contact</th><th>contact_no</th> </tr>';
$servername = "domain";
$username = "name";
$password = "password";
$dbname = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT data FROM users WHERE NOT checked='true'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $value=$row["data"];
        $value=explode("**", $value);
        echo '<tr>';
        for($i=0; $i<=4; $i++){
echo "<td>$value[$i]</td>";
        }
        echo '</tr>';
    }

} else {
    echo "0 results";
}
$conn->close();
    echo '</table>';

echo '<br><br><form action="contact.php?admin=damiultimate@@@" method="post"><button type="submit" name="update">update</button><button onclick="window.reload()">Reload</button></form>';


$servername = "domain";
$username = "name";
$password = "password";
$dbname = "dbname";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET checked='false' WHERE checked='none'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} 
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();








}


?>



</body>
</html>

