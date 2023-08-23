<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user responses
    if (isset($_POST['q1']) && isset($_POST['q2'])) {
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];

        // Simple career path prediction (Modify this based on your real-world data)
        if ($q1 == 'yes' && $q2 == 'yes') {
            $career = "Software Engineer";
        } elseif ($q1 == 'yes' && $q2 == 'no') {
            $career = "Data Scientist";
        } elseif ($q1 == 'no' && $q2 == 'yes') {
            $career = "Sales Manager";
        } else {
            $career = "Accountant";
        }

        // Display the predicted career
        echo "<h2>Predicted Career: $career</h2>";
    } else {
        echo "<h2>Error: Please answer all the questions.</h2>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Career Prediction System</title>
 <style>
    body {
    font-family: Arial, sans-serif;
    text-align: center;
}

.container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

h1 {
    margin-bottom: 20px;
}
body{
    background-image:url("images/bgblue.jpg");
}
</style>
</head>
<body>
    <div class="container">
        <h1>Career Prediction System</h1>
        <form action="blog.php" method="post">
            <label>Question 1: Are you good at problem-solving?</label>
            <input type="radio" name="q1" value="yes" required> Yes
            <input type="radio" name="q1" value="no" required> No
            <br>
            <label>Question 2: Do you enjoy working with people?</label>
            <input type="radio" name="q2" value="yes" required> Yes
            <input type="radio" name="q2" value="no" required> No
            <br>
            <!-- Add more questions here -->
            <input type="submit" value="Get Career Prediction">
        </form>
    </div>
</body>
</html>
