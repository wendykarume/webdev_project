<?php
		$name = filter_input(INPUT_POST,'fullname');
	  	$email = filter_input(INPUT_POST,'emailaddress');
	  	$pick = filter_input(INPUT_POST,'pickUp');
	 	$day = filter_input(INPUT_POST,'Day');
	 	$moment=filter_input(INPUT_POST,'Time');
	 	$event=filter_input(INPUT_POST,'Event');
	 	$subject=filter_input(INPUT_POST,'subject');

	  if (!empty($name) && !empty($email)){
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
			$sql = "INSERT INTO placement(name,email,pick,day,moment,event,subject) VALUES ('$name','$email','$pick','$day','$moment','$event','$subject')";
					
				if ($conn->query($sql)){
							echo "Successful";
							header("Location:order.php");

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
