<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Name'] ?? '');
    $email = htmlspecialchars($_POST['Email'] ?? '');
    $dob = htmlspecialchars($_POST['DOB'] ?? '');
    $age = htmlspecialchars($_POST['Age'] ?? '');
    $branch = htmlspecialchars($_POST['Branch'] ?? '');
    $year = htmlspecialchars($_POST['year'] ?? '');
    $feedback = htmlspecialchars($_POST['feedback'] ?? '');

    echo "<h2>Student Survey Submitted</h2>";
    echo "<strong>Name:</strong> $name <br>";
    echo "<strong>Email:</strong> $email <br>";
    echo "<strong>DOB:</strong> $dob <br>";
    echo "<strong>Age:</strong> $age <br>";
    echo "<strong>Branch:</strong> $branch <br>";
    echo "<strong>Year:</strong> $year <br>";
    echo "<strong>Feedback:</strong> " . nl2br($feedback) . "<br>";
} else {
    echo "Please submit the form first.";
}
?>
