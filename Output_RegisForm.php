<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="OutputRegisForm.css">
</head>

<body>

<div class="container">

<?php

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];
    $age = htmlspecialchars(trim($_POST['age']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $course = htmlspecialchars(trim($_POST['course']));

    $hobbies = [];

    if (isset($_POST['hobbies'])) {
        $hobbies = $_POST['hobbies'];
    }

    // VALIDATION

    if (empty($name)) {
        $error .= "<li>Name is required.</li>";
    }

    if (empty($email)) {
        $error .= "<li>Email is required.</li>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= "<li>Invalid email format.</li>";
    }

    if (empty($password)) {
        $error .= "<li>Password is required.</li>";
    }

    if (!is_numeric($age) || $age < 1 || $age > 100) {
        $error .= "<li>Age must be between 1 and 100.</li>";
    }

    if (empty($gender)) {
        $error .= "<li>Gender is required.</li>";
    }

    if (empty($course)) {
        $error .= "<li>Course is required.</li>";
    }

    // DISPLAY ERRORS

    if (!empty($error)) {

        echo "
        <h2 class='error-title'>Registration Failed</h2>

        <div class='error-box'>
            <ul>$error</ul>
        </div>
        ";

    } else {

        echo "
        <h2>Registration Successful</h2>

        <div class='info'>
            <strong>Name</strong>
            <p>$name</p>
        </div>

        <div class='info'>
            <strong>Email</strong>
            <p>$email</p>
        </div>

        <div class='info'>
            <strong>Password</strong>
            <p>Hidden for security</p>
        </div>

        <div class='info'>
            <strong>Age</strong>
            <p>$age</p>
        </div>

        <div class='info'>
            <strong>Gender</strong>
            <p>$gender</p>
        </div>

        <div class='info'>
            <strong>Course</strong>
            <p>$course</p>
        </div>

        <div class='info'>
            <strong>Hobbies</strong>
            <p>";

            if (!empty($hobbies)) {
                echo implode(", ", $hobbies);
            } else {
                echo "No hobbies selected";
            }

        echo "
            </p>
        </div>
        ";
    }

} else {

    echo "<h2 class='error-title'>Invalid Request</h2>";
}
?>

<div class="button-group">

    <form action="Group 6.php" method="POST">
        <button type="submit" class="primary-btn">
            Continue to Main Page
        </button>
    </form>

    <form action="RegisForm.php" method="POST">
        <button type="submit" class="secondary-btn">
            Back to Registration Form
        </button>
    </form>

</div>

</div>

</body>
</html>