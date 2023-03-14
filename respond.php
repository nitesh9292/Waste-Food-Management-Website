<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $request_id = $_POST['request_id'];
    $donor_email = $_POST['donor_email'];
    $action = $_POST['action'];

    // update the request status in the database based on the donor's action
    $stmt = $pdo->prepare('UPDATE food_requests SET status = ? WHERE id = ?');
    if ($action == 'accept') {
        $stmt->execute(['accepted', $request_id]);
    } else {
        $stmt->execute(['declined', $request_id]);
    }
    
    // send an email to the donor to notify them of the status update
    $to = $donor_email;
    $subject = 'Donation Request Status Update';
    $message = 'Your donation request has been ' . $action . 'ed.';
    $headers = 'From: ngo@example.com' . "\r\n" .
               'Reply-To: ngo@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    // redirect back to the notifications page
    header('Location: notifications.php');
    exit();
}
?>
