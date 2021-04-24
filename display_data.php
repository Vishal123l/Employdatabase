<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"select * from register");
?>
<html>
<body>
<table border="3">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Job</th>
<th>Salary</th>
<th>gender</th>
<th>update</th>
</tr>

<?php
while($res=mysqli_fetch_array($result)){

echo'<tr>';
echo'<td>' .$res['Employee_id'].'</td>';
echo'<td>' .$res['employee_name'].'</td>';
echo'<td>' .$res['email'].'</td>';
echo'<td>' .$res['job'].'</td>';
echo'<td>' .$res['salary'].'</td>';
echo'<td>' .$res['gender'].'</td>';
echo"<td><a href=\"edit.php?employee_id=$res[Employee_id]\"><input type='submit' value='Edit'></a>";
echo'</tr>';
}
?>
</table>
</body>
</html>