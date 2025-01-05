<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiêu đề trang</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="shortcut icon" href="./images/logo/favicon.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="header-body">
            <!-- Logo -->
            <a href="index.php">
                <img
                    src="upload/logo/logo-koreahopping.png"
                    alt="Korea Hopping logo"
                    class="logo" />
            </a>
            <!-- Nav -->
            <nav class="navbar">
                <ul class="navbar__list" id="navbar__list--pc">
                    <li class="navbar__item">
                        <a class="navbar__link" href="tours.php">투어</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="reality.php">부동산</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#!">공지사항</a>
                    </li>
                    <li class="navbar__item">
                        <a class="navbar__link" href="#!">회사소개</a>
                    </li>
                </ul>
            </nav>
            <!-- Contact -->
            <div class="header-contact">
                <!-- Link to: Phone Number -->
                <div class="header-contact-link-tel">
                    <a href="tel:+84919139091">
                        <span>
                            <span class="header-contact-text-tel">
                                문의전화
                            </span>
                            (+84) 0919-13-90-91
                        </span>
                    </a>
                </div>
                <!-- Link to: Kakao Talk -->
                <a href="http://qr.kakao.com/talk/BMpyGE0wdiG1IeKC05Tk2je5djo-"><img
                        src="./upload/svg/kakaotalk-logo.svg"
                        alt="top-link-Kakao"
                        class="header-contact-Kakao" /></a>
            </div>
        </div>
    </header>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <input type="checkbox" name="menu-checkbox" id="menu-checkbox" class="menu-checkbox" hidden>
        <label for="menu-checkbox">
            <svg class="menu-header__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
            </svg>
        </label>
        <!-- Overlay -->
        <label for="menu-checkbox" class="menu-overlay"></label>

        <!-- Menu Content -->
        <div class="menu-drawer">
            <!-- Mobile Menu Top -->
            <div class="menu-drawer__top"></div>
            <!-- Mobile Nav -->
            <ul id="navbar__list--mobile"></ul>
            <script>
                const navPC = document.querySelector("#navbar__list--pc");
                const navMobile = document.querySelector("#navbar__list--mobile");
                // Sao chép
                navMobile.innerHTML = navPC.innerHTML;
            </script>

            <!-- Link to: Phone Number -->
            <div class="header-contact-link-tel">
                <a href="tel:+84919139091">
                    <span class="header-contact-text-tel-mobile">
                        (+84) 0919-13-90-91
                    </span>
                </a>
            </div>
        </div>
    </div>