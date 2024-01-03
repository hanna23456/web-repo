<?php
// Connect to DB

$conn= mysqli_connect("localhost","root","","college");
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
else{
   echo "Connected successfully";}

$sql = "insert into student values ('900','Alana','BBA','101')";

if (mysqli_query($conn, $sql)) {

echo "<br>New record created successfully";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}


$sqll = "select * from student";

$result = mysqli_query($conn, $sqll);

if (mysqli_num_rows($result) > 0) {

// output data of each row
echo "<table border=\"1\"><tr><th>Roll no</th><th>Name</th><th>Course</th><th>Dept_ID</th></tr>";

while($row = mysqli_fetch_assoc($result)) {

echo "<tr><td> " . $row["Roll_No"]."</td>";
echo "<td>" . $row["Name"]."</td>";
echo "<td>" . $row["Course"]."</td>";
echo "<td>".$row["Dept_ID"]."</td></tr>";
echo "<br>";
}

} else {

echo "No records found";

}

mysqli_close($conn);



?>

