<!DOCTYPE html>
<html>
<head>
    <title>Profile Form</title>
</head>
<body>
    <h1>Profile Form</h1>
<?php

// Check if the form has been submitted

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Process the form data

            $name = $_POST["name"];
            $email = $_POST["email"];
            $age = $_POST["age"];
            // Display the submitted data
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Age: $age</p>";
        } else {

            // Display the form

            echo '<form method="post" action="profile-form.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age"><br><br>

                <input type="submit" value="Submit">
        </form>';
     }
 ?>
</body>
</html>