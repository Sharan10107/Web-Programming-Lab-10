
<?php
date_default_timezone_set("Asia/Kolkata");

$date = date("d F Y");
$time = date("h:i:s A");
$day = date("l");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #10172a, #202b48);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: white;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            text-align: center;
        }

        .container h1 {
            font-size: 34px;
            margin-bottom: 12px;
            color: #ffffff;
        }

        .subtitle {
            color: #aab6d3;
            margin-bottom: 45px;
            font-size: 16px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 22px;
            padding: 50px 15px;
            transition: 0.3s;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.13);
        }

        .icon {
            font-size: 42px;
            margin-bottom: 25px;
        }

        .card h3 {
            color: #aab6d3;
            font-size: 19px;
            margin-bottom: 20px;
        }

        .value {
            font-size: 25px;
            font-weight: bold;
            color: #65d6ff;
            overflow-wrap: anywhere;
        }

        .time {
            font-size: 27px;
        }

        .footer {
            margin-top: 50px;
            color: #8e9ab7;
            font-size: 16px;
        }

        @media (max-width: 650px) {
            .cards {
                grid-template-columns: 1fr;
            }

            .container h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Digital Clock Dashboard</h1>

    <p class="subtitle">
        Current Date, Time and Day
    </p>

    <div class="cards">

        <div class="card">
            <div class="icon">📅</div>
            <h3>Current Date</h3>
            <div class="value" id="liveDate">
                <?php echo $date; ?>
            </div>
        </div>

        <div class="card">
            <div class="icon">⏰</div>
            <h3>Current Time</h3>
            <div class="value time" id="liveTime">
                <?php echo $time; ?>
            </div>
        </div>

        <div class="card">
            <div class="icon">🌍</div>
            <h3>Current Day</h3>
            <div class="value" id="liveDay">
                <?php echo $day; ?>
            </div>
        </div>

    </div>

    <p class="footer">
        PHP Date and Time Application | Asia/Kolkata
    </p>

</div>

<!-- Automatic Live Clock -->
<script>
function updateClock() {

    const now = new Date();

    const options = {
        timeZone: 'Asia/Kolkata'
    };

    const date = new Intl.DateTimeFormat('en-IN', {
        ...options,
        day: '2-digit',
        month: 'long',
        year: 'numeric'
    }).format(now);

    const time = new Intl.DateTimeFormat('en-IN', {
        ...options,
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
    }).format(now);

    const day = new Intl.DateTimeFormat('en-IN', {
        ...options,
        weekday: 'long'
    }).format(now);

    document.getElementById('liveDate').textContent = date;
    document.getElementById('liveTime').textContent = time;
    document.getElementById('liveDay').textContent = day;
}

// Update immediately
updateClock();

// Update every second
setInterval(updateClock, 1000);
</script>

</body>
</html>
