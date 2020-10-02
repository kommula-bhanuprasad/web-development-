<?php
include_once 'data.php';
if(isset($_POST['enroll']))
{	 
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $email = $_POST['email'];
     $branch = $_POST['branch'];
     $domain = $_POST['domain'];
    //  $duration = $_POST['duration'];
     $referal = $_POST['referal'];

     
	 $sql = "INSERT INTO enrolldb (firstname,lastname,email,branch,domain,referal)
	 VALUES ('$firstname','$lastname','$email','$branch','$domain','$referal')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
		 //header("Location:savemoney.epizy.com");
		 echo "<script>alert('New record created successfully !');window.location.href= 'index.html' ;</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>