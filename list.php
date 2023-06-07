<?php 
    $servername = "servername";
    $username = "username";
    $password = "password";
    $dbname = "studentdb"

    //create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($conn->connect_error)
    {
        die("Connection Error" . $conn->connect_error)
    }

    // Retrieve Data from Students Table
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    
    if($result->num_rows>0)
    {
        echo "<h1>List of Registered Students:</h1>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th></tr>";
        while($row = $result->fetch_assoc())
        {
            echo "<tr><td>.$row["id"].</td><td>.$row["fullname"].</td><td>.$row["name"].</td><td>.$row["gender"].</td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "No student registered yet";
    }
    
     // Close Connection
	$conn->close();
?>