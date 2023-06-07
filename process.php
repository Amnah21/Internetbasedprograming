<?php 
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "studentdb";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error)
    {
        die("Connection Error: " . $conn->connect_error);
    }

    //form validation
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];

    if(empty($name)||empty($email)||empty($gender))
    {
        echo "All fields are required";
    }
    else{
        $sql = "INSERT INTO students (fullname, email, gender) VALUES ('$name','$email','$gender')";

        if ($conn->query($sql) === TRUE) {
			echo "Student Registered Successfully!";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
    
    // Close Connection
	$conn->close();
?>