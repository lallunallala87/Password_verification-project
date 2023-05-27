<html>
<body style="background-color:skyblue;color:black" >
<h1 align="center" style="font-size:40px" >
<?php
 $name = $_POST['name'];
 $password = $_POST['password'];
 $username=$_POST['username'];
 $var = ' ' ;
 
 
 if(!empty($name) || !empty($password) || !empty($username)){
	 
	 $host = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname = "users";
	 
	
	$conn = mysqli_connect($host , $dbUsername , $dbPassword ,$dbname);
	$query = "select * from details where Username='$username' " ;
	$result = mysqli_query($conn,$query);
	
  if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
	else {
		$username=$_POST['username'];
		$query = "select * from details where Username='$username' " ;
		$result = mysqli_query($conn,$query);
  if (mysqli_num_rows($result))
  {
      $var = "Username already exists !!!!" ;
  }
  else {
	 
		 
	 $stmt = $conn->prepare("Insert Into details(Name ,Username,Password) 
	        values (?,?,?)");
	$stmt->bind_param("sss",$name,$username,$password);
	$stmt->execute();
	echo " Records Inserted and Account created Successfully";
	$stmt->close();
	$conn->close();
	 } 
	 
  }

 }
	
 
else {
	 echo "All fields are required ";
	 die();
	  
 
 }

?>

<h2 style="color:green;font-size:40px" align="center"> <?php echo $var; ?> </h2>
 </h1>
 </body>
 </html>