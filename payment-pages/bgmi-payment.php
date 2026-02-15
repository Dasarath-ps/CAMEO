<?php 
$returnLink = '../cyberclash.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMEO 2026 | Nirmala College MCA</title>

    <!-- External Libraries -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="antialiased selection:bg-cyan-500 selection:text-black">

    <!-- HEADER -->
    <?php include '../includes/header.php' ?>

    <!-- PAYMENT SECTION -->
    <section class="payment-section">

        <h2>Registration Fee</h2>
        <p class="fee"> <span>₹200/ Team</span></p>

        <div class="upi-options">

            <!-- UPI Option -->
<a class="upi-card"
   href="upi://pay?pa=athul9150@okaxis&pn=Athul%100Soman&cu=INR">

    <img src="../asset/payment-QR/bgmi/athul%20soman.jpeg" alt="UPI QR Athul Soman">
    <p>UPI ID:</p>
    <strong>athul9150@okaxis</strong>

</a>


        </div>

        <p class="payment-note">
            Complete the payment and submit details below 👇
        </p>

        <!-- Google Form Button -->
        <button class="cyber-btn"
                onclick="window.open('https://forms.gle/jU1KATB5EWk94mq87')">
            Submit Payment Details
        </button>

    </section>

    <!-- FOOTER -->
    <?php include '../includes/footer.php' ?>

    <!-- JS -->
    <script src="../js/javaS.js"></script>

</body>
</html>
