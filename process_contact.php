<?php
// Include database connection
include 'db_connect.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get and sanitize form data
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $company = isset($_POST['company']) ? htmlspecialchars(trim($_POST['company'])) : '';
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Combine first and last name
    $fullName = $firstName . ' ' . $lastName;
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=invalid_email");
        exit();
    }
    
    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, company, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
    
    if ($stmt === false) {
        header("Location: contact.php?error=database");
        exit();
    }
    
    // Bind parameters
    $stmt->bind_param("ssssss", $fullName, $email, $phone, $company, $subject, $message);
    
    // Execute
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: contact.php?success=1");
        exit();
    } else {
        $stmt->close();
        $conn->close();
        header("Location: contact.php?error=submit");
        exit();
    }
    
} else {
    header("Location: contact.php");
    exit();
}
?>
