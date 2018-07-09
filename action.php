<?php
		$name = filter_input(INPUT_POST,'fullname');
	  	$email = filter_input(INPUT_POST,'emailaddress');
	  	$locate = filter_input(INPUT_POST,'location');
	 	$feed = filter_input(INPUT_POST,'feedback');

	  if (!empty($name) && !empty($email) && !empty($feed) ){
		    $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "blackrose";
			
			global $conn;
	$conn = new mysqli($servername, $username, $password,$database);
	if (mysqli_connect_error()) {
	    die('Connection Error ('  . mysqli_connect_errno() .')'
		.mysqli_connect_error());
	} else{
			$sql = "INSERT INTO customer(name,email,location,feedback) VALUES ('$name','$email','$locate','$feed')";
					
				if ($conn->query($sql)){
							echo "Successful";
							header("Location:contact.php");

				} else{
					echo "Error: ".$sql."<br>".$conn->error;
					$conn->close();
				}
	}
}else{
          echo "Fill every field";
      }
	exit();



?>

