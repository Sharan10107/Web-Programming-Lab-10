<?php
date_default_timezone_set("Asia/Kolkata");
session_start();

if (!isset($_SESSION["name"]) || !isset($_SESSION["start_time"])) {
    header("Location: index.php");
    exit();
}

$name = htmlspecialchars($_SESSION["name"]);
$duration = time() - $_SESSION["start_time"];

$hours = floor($duration / 3600);
$minutes = floor(($duration % 3600) / 60);
$seconds = $duration % 60;

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <div class="icon">🎉</div>

        <h1>Thank You, <?php echo $name; ?>!</h1>

        <p>You have successfully logged out.</p>

        <h2>Your Usage Duration</h2>

        <p>
            <?php echo "$hours Hours : $minutes Minutes : $seconds Seconds"; ?>
        </p>

        <a class="link" href="index.php">← Login Again</a>

    </div>

    <p class="footer">PHP Session Management Application</p>

</div>

</body>
</html>
