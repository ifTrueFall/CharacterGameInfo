<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $race = $_POST["race"];
    $class = $_POST["class"];
    $background = $_POST["background"];

    // Compose email message
    $to = "yourgameinfos@gmail.com";
    $subject = "New D&D Character Info";
    $message = "Character Name: $name\n";
    $message .= "Race: $race\n";
    $message .= "Class: $class\n";
    $message .= "Background:\n$background\n";

    // Send email
    mail($to, $subject, $message);

    // Redirect back to form with success message
    header("Location: index.html?status=success");
    exit;
} else {
    // Redirect back to form with error message
    header("Location: index.html?status=error");
    exit;
}
?>
