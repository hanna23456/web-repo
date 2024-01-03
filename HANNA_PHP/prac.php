<html>
<head>
<style>
.box{
    position:fixed;
    padding:10px;
    margin:auto;
    border:solid 5px;
    border-radius:22px;
    border-color:black;
    background-color:aliceblue;
    height:650px:
    width:550px;
    left:450px:
    top:40px;
    text-align:center;
}
</style>
<script>
function validate(){
 var name=document.forms['form1']['name'].value;
  let regex =/^[a-zA-Z]+$/;
 if(regex.test["name"]==false)
{
 alert("contain only letters");
 return false;
}
}
</script>
</head>
<body>
<div class="box">
<h2>STUDENT FORM</h2>
<br>
<br>
<br>
<center><form name="form1" method="post" onsubmit="return validate();">
<label>Name:</label>
<input type="text" id="name" name="name" required>
<br>
<br>
<label>Admission no:</label>
<input type="text" id="admno"name="admno" required>
<br>
<br>
<label>Class:</label>
<input type="number" id="class" name="class" required>
<br>
<br>
<label>Mark1:</label>
<input type="text" id="mark1" name="mark1" required>
<br>
<br>
<label>Mark2:</label>
<input type="text" id="mark2" name="mark2" required>
<br>
<br>
<label>Mark3:</label>
<input type="text" id="mark3" name="mark3" required>
<br>
<br>
<label>Mark4:</label>
<input type="text" id="mark4" name="mark4" required>
<br>
<br>
<input type="submit" id="submit">
</form></center>


<?php
$conn=mysqli_connect("localhost","root","","exam");

if($conn)
{
  echo"<br>succesfully connected";
}
else
{
 echo"not connected";
}
$name=$_POST['name'];
$admno=$_POST['admno'];
$class=$_POST['class'];
$mark1=$_POST['mark1'];
$mark2=$_POST['mark2'];
$mark3=$_POST['mark3'];
$mark4=$_POST['mark4'];

$sql="insert into form values('$name','$admno','$class','$mark1','$mark2','$mark3','$mark4')";


if(mysqli_query($conn,$sql))
{
echo "'<br>'new record is created sucessfully";
}
else
{
 echo"error";

}
echo "<br>Name is:$name'<br>'";
echo "admission no:$admno'<br>'";
echo "Class:$class'<br>'";
echo "mark1:$mark1'<br>'";
echo "mark2:$mark2'<br>'";
echo "mark3:$mark3'<br>'";
echo "mark4:$mark4'<br>'";

mysqli_close($conn);
?>
</div>
</body>
</html>
























