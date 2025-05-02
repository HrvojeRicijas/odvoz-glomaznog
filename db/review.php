<?php 
include 'db.php'; // Ensure this file establishes $dbc for the database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form inputs
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $review = isset($_POST['review']) ? trim($_POST['review']) : '';

    // Basic validation
    if (!empty($name) && !empty($review)) {
        // Prepare the SQL statement to insert the review
        $sql = "INSERT INTO reviews (name, text) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($dbc);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            // Bind parameters and execute
            mysqli_stmt_bind_param($stmt, 'ss', $name, $review);
            if (mysqli_stmt_execute($stmt)) {
                // Success message or redirect
                header ("location: ../index.php");
                // Redirect to a thank you page or reload
                // header('Location: thank_you.php'); // Uncomment to redirect
            } else {
                echo "Error: " . mysqli_error($dbc);
            }
        } else {
            echo "Error preparing the statement: " . mysqli_error($dbc);
        }
    } else {
        echo "Both name and review fields are required.";
    }

    // Close the database connection
    mysqli_close($dbc);
} else {
    echo "Invalid request method.";
}
?>