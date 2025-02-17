<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $attendance = htmlspecialchars($_POST['attendance']);
    $guests = (int)$_POST['guests'];
    $food = htmlspecialchars($_POST['food']);

    // Here you can save the data to a database or send it via email
    // Example: Saving to a file (not recommended for production)
    $filename = "rsvp_submissions.txt";
    $submission = "Name: $name\nEmail: $email\nAttendance: $attendance\nGuests: $guests\nFood Preference: $food\n\n";
    file_put_contents($filename, $submission, FILE_APPEND);

    // Redirect or show a success message
    echo "<h1>Thank You!</h1><p>Your RSVP has been submitted.</p>";

} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}
?>
