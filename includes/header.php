<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/variables.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>
    <header>
        <nav id="navbar--mobile">
            <div class="logo-container">
                <a href="../public/index.php">
                    <img class="logo" src="./images/logo.png" alt="Korea Hopping Website" />
                </a>
            </div>

            <div class="nav-links" id="navLinks">
                <a href="../public/tours.php">투어</a>
                <a href="../public/properties.php">부동산</a>
                <div class="tel">
                    <a href="tel:+84919139091">
                        <span>문의전화</span>
                        <span>(+84) 0919-13-90-91</span>
                    </a>
                </div>
                <div class="sns"><a href=""><img src="../public/images/sns-icon/kakao-channel.png" alt=""></a></div>
            </div>
            <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        </nav>
        <div class="contact">
            <!-- Link to: Phone Number -->

        </div>
    </header>

    <script>
        function toggleMenu() {
            var navLinks = document.getElementById("navLinks");
            navLinks.classList.toggle("active");
        }
    </script>
</body>

</html>