<?php
date_default_timezone_set("Asia/Kolkata");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? "");

    if ($name == "") {
        header("Location: index.php");
        exit();
    }

    $_SESSION["name"] = $name;
    $_SESSION["start_time"] = time();
}

if (!isset($_SESSION["name"])) {
    header("Location: index.php");
    exit();
}

$name = htmlspecialchars($_SESSION["name"]);
$startTime = date("h:i:s A", $_SESSION["start_time"]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <p class="start-time">
            Start Time: <?php echo $startTime; ?>
        </p>

        <div class="icon">👋</div>

        <h1>Hello, <?php echo $name; ?>!</h1>

        <p>You have successfully logged in.</p>
        <p>Your session is now active.</p>

        <form action="logout.php" method="POST">
            <button type="submit">Logout →</button>
        </form>

    </div>

    <p class="footer">PHP Session Management Application</p>

</div>

</body>
</html>
