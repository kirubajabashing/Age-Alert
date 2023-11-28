<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the age from the form
    $age = isset($_POST['age']) ? intval($_POST['age']) : 0;

    // Determine the age range
    if ($age >= 0 && $age <= 2) {
        $message = "Baby";
    } elseif ($age >= 3 && $age <= 12) {
        $message = "Child";
    } elseif ($age >= 13 && $age <= 19) {
        $message = "Teen";
    } elseif ($age >= 20) {
        $message = "Adult";
    } else {
        $message = "Invalid age";
    }

    // Use JavaScript to display an alert on the client side
    echo "<script>alert('$message');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Alert</title>
</head>
<body>
    <!-- Simple form for entering age -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="age">Enter your age:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
