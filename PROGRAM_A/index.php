
<!DOCTYPE html>
<html>
<head>
    <title>PHP Login Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">

    <h1>PHP Login System</h1>
    <p class="subtitle">Session Based Authentication</p>

    <div class="card">
        <div class="icon">🔐</div>

        <h2>Welcome Back!</h2>
        <p>Enter your name to start your session.</p>

        <form action="hello.php" method="POST">
            <input type="text" name="name"
                   placeholder="Enter your name" required>

            <button type="submit">Login →</button>
        </form>
    </div>

    <p class="footer">PHP Session Management Application</p>

</div>

</body>
</html>
