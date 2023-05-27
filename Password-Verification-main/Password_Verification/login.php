<html>
<body style="background-color:orange;color:white" >
<h1 align="center" style="font-size:40px" >
<?php 
 
 $host = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbname = "users";
	 
	 $conn = mysqli_connect($host , $dbUsername , $dbPassword ,$dbname);
	 if($conn->connect_error){
		 die('connection Failed : '.$conn->connect_error);
	 }
	 else{
		 $un = $_POST['Username'];
		 $pswd = $_POST['Password'];
		 $query = "select * from details where Username='$un' and Password='$pswd' " ;
		 $result = mysqli_query($conn ,$query);
		 $count = mysqli_num_rows($result);
		 if($count>0){
			 echo "Login successful And Password is Verified";
		 }
		 else{
			 echo "Username and Password do not Match !!!";
	 }}
	 
		 
?>
</h1>
 
</body>

</html>