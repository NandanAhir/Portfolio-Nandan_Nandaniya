<html>
<head>
	<title>POrtfolio</title>
</head>
<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost","root","","portfolio");
		if($conn === false){
			die("ERROR::". mysqli_connect_error());
		}
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];

		$sql = "INSERT INTO form VALUES ('$name', '$email', '$message')";
		if($query = mysqli_query($conn,$sql)){

            }else{
            	echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
            }

		mysqli_close($conn);

		?>
	</center>
</body>
</html>