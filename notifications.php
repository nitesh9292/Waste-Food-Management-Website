
<?php
$pdo = new PDO('mysql:host=localhost;dbname=food;charset=utf8mb4', 'root', '');
// count the number of pending requests for the donor
$stmt = $pdo->prepare('SELECT COUNT(*) FROM food_requests WHERE donor_email = ? AND status = "Pending"');
$stmt->execute([$donor_email]);
$pending_count = $stmt->fetchColumn();
?>

<!-- display the notification icon with a badge count -->
<a href="notifications.php">
  <i class="fa fa-bell"></i>
  <?php if ($pending_count > 0) : ?>
    <span class="badge"><?php echo $pending_count; ?></span>
  <?php endif; ?>
</a>
