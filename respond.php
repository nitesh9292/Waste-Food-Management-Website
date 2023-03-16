<?php
require("includes/common.php");

if (isset($_POST['accept'])) {
    $request_id = $_POST['request_id'];
    $donor_email = $_SESSION['email'];
    $ngo_email = $_SESSION['ngo_email'];

    echo $request_id;
    echo $donor_email;
    echo $ngo_email;

    // Update request status to accepted in database
    $stmt = mysqli_prepare($conn, 'UPDATE food_requests SET status = "accepted" WHERE id = ?');
    mysqli_stmt_bind_param($stmt, 'i', $request_id);
    mysqli_stmt_execute($stmt);

    // Send email to donor
    $subject = 'Food donation request accepted';
    $message = "Your food donation request has been accepted by $donor_email.";
    $headers = 'From: example@example.com';
    mail($ngo_email, $subject, $message, $headers);

    // Redirect back to notifications page
    header('Location: notifications.php');
    exit();
}

if (isset($_POST['decline'])) {
    $request_id = $_POST['request_id'];
    $donor_email = $_SESSION['email'];
    $ngo_email = $_POST['ngo_email'];
    
    echo $request_id;
    echo $donor_email;
    echo $ngo_email;

    // Update request status to declined in database
    $stmt = mysqli_prepare($conn, 'UPDATE food_requests SET status = "declined" WHERE id = ?');
    mysqli_stmt_bind_param($stmt, 'i', $request_id);
    mysqli_stmt_execute($stmt);

    // Send email to donor
    $subject = 'Food donation request declined';
    $message = "Your food donation request has been declined by $donor_email.";
    $headers = 'From: example@example.com';
    mail($ngo_email, $subject, $message, $headers);

    // Redirect back to notifications page
    header('Location: respond.php');
    exit();
}
?>


