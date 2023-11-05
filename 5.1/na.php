<?php
$conn = new mysqli("localhost","root","","iuni");
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM kp";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
echo "<table border='1'>
<tr>
<th> IU</th>
<th>Name </th>
<th>Email</th>
</tr>";
while ($row = $result->fetch_assoc()){
       echo "<tr><td>" . $row['IU'] . "</td>
       <td>" . $row['Name'] . "</td>
       <td>" . $row['Email'] . "</td>
       </tr>";
       }
       echo "</table>";
       }
       else
       {
       echo "No records found";
       }
       $conn->close();
       ?>