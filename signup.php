<?php 
	
$showAlert = false; 
$showError = false; 
$exists=false; 
	
if($_SERVER["REQUEST_METHOD"] == "POST") { 
	
	include 'db_conn.php'; 
	
	$username = $_POST["Name"];
    $country = $_POST["myCountry"]; 
    $email = $_POST["email"]; 
	$password = $_POST["psw"]; 
	$cpassword = $_POST["psw-repeat"]; 
			
	
	$sql = "SELECT *FROM user WHERE name='$username'"; 
	
	$result = mysqli_query($conn, $sql); 
	
	$num = mysqli_num_rows($result); 
	if($num == 0) { 
		if(($password == $cpassword) && $exists==false) { 

			// Password Hashing is used here. 
			$sql = "INSERT INTO user (name, 
				country, mail, hash) VALUES ('$username', 
				'$country', '$email', '$password')"; 
	
			$result = mysqli_query($conn, $sql);
	
			if ($result) { 
				$showAlert = true; 
                header("Location: layout.php");
                exit();
			} 
		} 
		else { 
			$showError = "Passwords do not match"; 
		}	 
	}// end if 
	
if($num>0) 
{ 
	$exists="Username not available"; 
} 
	
}
	
?> 
	
<?php 
	
	if($showAlert) { 
	
		echo ' <div class="alert alert-success 
			alert-dismissible fade show" role="alert"> 
	
			<strong>Success!</strong> Your account is 
			now created and you can login. 
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"> 
				<span aria-hidden="true">×</span> 
			</button> 
		</div> '; 
	} 
	
	if($showError) { 
	
		echo ' <div class="alert alert-danger 
			alert-dismissible fade show" role="alert"> 
		<strong>Error!</strong> '. $showError.'
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close"> 
			<span aria-hidden="true">×</span> 
	</button> 
	</div> '; 
} 
		
	if($exists) { 
		echo ' <div class="alert alert-danger 
			alert-dismissible fade show" role="alert"> 
	
		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close"> 
			<span aria-hidden="true">×</span> 
		</button> 
	</div> '; 
	} 

?> 

<script src=" 
https://code.jquery.com/jquery-3.5.1.slim.min.js" 
	integrity=" 
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
	crossorigin="anonymous"> 
</script> 
	
<script src=" 
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity= 
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous"> 
</script> 
	
<script src=" 
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
	integrity= 
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	crossorigin="anonymous"> 
</script> 
 
