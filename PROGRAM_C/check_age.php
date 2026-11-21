
<?php
$name = trim($_POST["name"] ?? "");
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

if ($_SERVER["REQUEST_METHOD"] !== "POST" ||
    $name === "" || $age === false ||
    $age === null || $age < 0) {
    die("Invalid input. Please go back and try again.");
}

$name = htmlspecialchars($name);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Age Verification Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">

    <div class="card">

        <?php if ($age < 18) { ?>

            <div class="icon">🚫</div>

            <h2>Access Denied</h2>

            <p>
                Hello, <?php echo $name; ?>!
            </p>

            <p>You are not authorized to visit the site.</p>

        <?php } else { ?>

            <div class="icon">✅</div>

            <h2>Access Granted</h2>

            <p>
                Welcome to this site, <?php echo $name; ?>!
            </p>

            <p>You are authorized to visit the site.</p>

        <?php } ?>

        <a class="link" href="age.html">← Go Back</a>

    </div>

    <p class="footer">PHP Age Verification Application</p>

</div>

</body>
</html>
