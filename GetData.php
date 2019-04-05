<?php 
$tablename = 'light';

//1. connect db
$con = mysqli_connect("localhost","test123","test123","lightdb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } //else {  echo	"Yes!Success!!";  }

//2. query table as an DB obj $result
$result=mysqli_query($con,"SELECT * FROM ".$tablename);


//3. unpack DB object as array
$i=0;
while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
$data[$i]=$row;
$i++;
}
//4. encode to JSON and echo
echo json_encode($data);
//5. close connect
mysqli_close($con);
 ?>
