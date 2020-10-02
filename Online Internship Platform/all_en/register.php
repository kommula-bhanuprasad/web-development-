<?php
include_once 'data.php';
if(isset($_POST['enroll']))
{	 
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
     $phoneNO = $_POST['phoneNO'];
     $college = $_POST['college'];
    //  $duration = $_POST['duration'];
     $referal = $_POST['referal'];

     
	 $sql = "INSERT INTO cadb (firstname,lastname,email,phoneNO,college,referal)
	 VALUES ('$firstname','$lastname','$email','$phoneNO','$college','$referal')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
		 //header("Location:savemoney.epizy.com");
		 echo "<script>alert('New record created successfully ! and you referal id is  $referal; ');window.location.href='reg.php';</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>