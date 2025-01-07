<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/variables.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo-container">
                <a href="/index.php">
                    <img class="logo" src="./images/logo.png" alt="Korea Hopping Website" />
                </a>
            </div>
            <!-- Menu -->
            <div class="nav-links" id="navLinks">
                <div class="nav-links__bar">
                    <a href="../public/tours.php" class="main-nav-link">투어</a>
                    <a href="../public/properties.php" class="main-nav-link">부동산</a>
                </div>
                <!-- Connect -->
                <div class="header__connect">
                    <!-- Phone number -->
                    <div class="tel">
                        <a href="tel:+84919139091">
                            <span>문의전화</span>
                            <span>(+84) 0919-13-90-91</span>
                        </a>
                    </div>
                    <!-- SNS connect -->
                    <div class="sns">
                        <div>
                            <a href=""><img src="../public/images/sns-icon/kakao-channel.png" alt="Kakao Talk"></a>
                        </div>
                        <div>
                            <a href=""><img src="../public/images/sns-icon/fb-icon.png" alt="Facebook Fanpage"></a>
                        </div>
                        <div>
                            <a href=""><img src="../public/images/sns-icon/instagram-icon.png" alt="Instagram"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hamburger-icon" onclick="toggleMenu()">&#9776;</div>
        </nav>
    </header>

    <script src="../public/js/script.js" defer></script>
</body>

</html>