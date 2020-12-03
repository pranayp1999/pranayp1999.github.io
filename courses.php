<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "sitetest1";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
else echo"connc";
if(isset($_POST['save']))
{	 
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $field = $_POST['field'];
	 $inter = $_POST['inter'];
	 $phno = $_POST['phno'];

	 $sql = "INSERT INTO courses (fname,lname,field,inter,phno)
	 VALUES ('$fname','$lname','$field','$inter','$phno')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>