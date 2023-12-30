<?php
// Validate that the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user input
    $volevel = isset($_POST['volevel']) ? htmlspecialchars($_POST['volevel']) : '';
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $prof = isset($_POST['prof']) ? htmlspecialchars($_POST['prof']) : '';
    $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';
    $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
    $vol = isset($_POST['vol']) ? htmlspecialchars($_POST['vol']) : '';
    $contact = isset($_POST['contact']) ? intval($_POST['contact']) : 0; // Assuming contact is an integer
    $remarks = isset($_POST['remarks']) ? htmlspecialchars($_POST['remarks']) : '';

 
    // Creating a connection with the Database
    $conn = new mysqli('localhost', 'root', '', 'iit',3870);

    // Check the connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO kids(volevel, name, prof, city, country, vol, contact, remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters with types
    $stmt->bind_param("ssssssis", $volevel, $name, $prof, $city, $country, $vol, $contact, $remarks);

    // Execute the statement
    if ($stmt->execute()) {
        
        echo '<div class="success-message">Hurray.. Registration Has Been Done!</div>';
    } else {
        echo '<div class="error-message">Error: ' . $stmt->error . '</div>';
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form was not submitted, handle accordingly
    echo "Error: Form not submitted.";
}
?>

<style>
    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        margin-bottom: 15px;
        text-align:center;
    }

    .error-message {
        background-color: #f8d7da;
        color: #721c24;
        padding: 10px;
        border: 1px solid #f5c6cb;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

