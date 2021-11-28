 <?php

	 
$mysqli = new mysqli("localhost", "root", "", "mo3db");
 $username = "";

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}


$result = mysqli_query($mysqli,"SELECT * FROM `users` WHERE `username` = '".$_GET['username']."' ");
while($row = mysqli_fetch_array($result))
{
        echo "<br />Your <b><i>Profile</i></b> is as follows:<br />";
	    echo "<b>id:</b> ". $row['id'];
        echo "<b>First name:</b> ". $row['username'];
        echo "<br /><b>email:</b> ".$row['email'];
        echo "<br /><b>user type:</b> ".$row['user_type'];
        echo "<br /><b>password:</b></b> ".$row['password'];
      
}
 
mysqli_close($mysqli);
 
?>