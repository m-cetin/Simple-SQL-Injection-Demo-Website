<?php
$var = mysqli_connect("localhost","user","YourPassword123","simplesqli");
$user=$_POST["UserId"];
$pass=$_POST["Password"];
$query=mysqli_query($var, "Select * from users where username='$user' and password='$pass';");
if(mysqli_num_rows($query)){
	echo "<strong style='color:green;'>Bingo!!! You are logged in as <span style='color:red;'>admin</span> </strong><br><br>";
	$users_data = mysqli_query("select * from users;");
	echo "<table border='1'><thead><td>username</td><Td>password</td></thead>";
	while($row = mysqli_fetch_array($users_data)) {
		echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "<strong style='color:red;'>Invalid Credentials.</strong><br><br>";
}
?>
