<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user responses
    if (isset($_POST['q1']) && isset($_POST['q2'])) {
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];

        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "career";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert user responses into the database
        $sql = "INSERT INTO users (q1, q2) VALUES ('$q1', '$q2')";
        if ($conn->query($sql) === TRUE) {
            echo "<h2>Responses saved successfully.</h2>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();

        // Simple career path prediction (Modify this based on your real-world data)
        // ...
        // Rest of the career prediction code
        // ...

    } else {
        echo "<h2>Error: Please answer all the questions.</h2>";
    }
}
?>
