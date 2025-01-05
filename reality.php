<!DOCTYPE html>
<html lang="kr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/responsive.css">
  <!-- Favicon -->
  <link
    rel="shortcut icon"
    href="./images/logo/favicon.png"
    type="image/x-icon" />
  <title>코리아 호핑 부동산</title>
</head>

<body>
  <!-- HEADER -->
  <?php include("./includes/header.php"); ?>

  <!-- MAIN -->
  <section class="" id="service-introduction">
    <div class="service-introduction-top">
      <p>고객 맞춤 매물 리스트</p>
      <h2>빌드블록이 추천합니다</h2>
      <P>빌드블록이 수집한 고객 데이터를 기반으로 선정한 주목할만한 미국 부동산, 여기서 확인해보세요.</P>
    </div>
    <!-- 주거용 매물 -->
    <div class="container">
      <div class="service-item">
        <div class="leading">
          <h3>주거용 매물</h3>
        </div>
        <ul class="reality-list">
          <!-- Item 1 -->
          <li class="reality-list__item">
            <a href="./reality_nice_life_hotel.php">
              <div class="box rounded">
                <div class="thumb"><img src="./images/reality/nice_life_hotel/nice_life_hotel_1.jpg" alt=""></div>
                <div class="item-info">
                  <div>판매중 | 주거용 | 콘도미니엄</div>
                  <span>가격 문의</span>
                  <div>Private Residences Las Vegas</div>
                </div>
              </div>
            </a>
          </li>
          <!-- Item 2 -->
          <li class="reality-list__item">
            <a href="./reality_nice_life_hotel.php">
              <div class="box rounded">
                <div class="thumb"><img src="./images/reality/nice_life_hotel/nice_life_hotel_2.jpg" alt=""></div>
                <div class="item-info">
                  <div>판매중 | 주거용 | 콘도미니엄</div>
                  <span>가격 문의</span>
                  <div>Private Residences Las Vegas</div>
                </div>
              </div>
            </a>
          </li>
          <!-- Item 3 -->
          <li class="reality-list__item">
            <a href="./reality_nice_life_hotel.php">
              <div class="box rounded">
                <div class="thumb"><img src="./images/reality/item-pic1.jpeg" alt=""></div>
                <div class="item-info">
                  <div>판매중 | 주거용 | 콘도미니엄</div>
                  <span>가격 문의</span>
                  <div>Private Residences Las Vegas</div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- 상업용 매물 -->
    <div class="service-item"></div>
  </section>

  <!-- FOOTER -->
  <?php include("./includes/footer.php"); ?>

</body>

</html>