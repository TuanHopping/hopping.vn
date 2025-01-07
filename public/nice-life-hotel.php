<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nice Life Hotel</title>
</head>

<body>
  <?php include '../includes/header.php'; ?>
  <div class="container">
    <h2 class="section-title">Property Detail</h2>
    <div class="property-detail">
      <div class="main-image">
        <img src="./images/properties/nice_life_hotel/nice_life_hotel_1.jpg" alt="Main Property Image" class="main-img" id="mainImage">
      </div>
      <div class="sub-image-box">
        <img src="./images/properties/nice_life_hotel/nice_life_hotel_2.jpg" alt="Thumbnail 1" class="thumbnail" data-src="./images/properties/nice_life_hotel/nice_life_hotel_2.jpg">
        <img src="./images/properties/nice_life_hotel/nice_life_hotel_3.jpg" alt="Thumbnail 2" class="thumbnail" data-src="./images/properties/nice_life_hotel/nice_life_hotel_3.jpg">
        <img src="./images/properties/nice_life_hotel/nice_life_hotel_4.jpg" alt="Thumbnail 3" class="thumbnail" data-src="./images/properties/nice_life_hotel/nice_life_hotel_4.jpg">
      </div>
    </div>

    <!-- Infomation Table -->
    <div class="box-con">
      <h3 class="box-con__title">매물정보</h3>
      <table class="property-table">
        <tr>
          <th>매물종류</th>
          <td>건물 (빌딩)</td>
        </tr>
        <tr>
          <th>소재지</th>
          <td>베트남, 푸꾸옥, Duong Dong</td>
        </tr>
        <tr>
          <th>규모</th>
          <td>지하-/지상2층</td>
        </tr>
        <tr>
          <th>연면적</th>
          <td>152.36㎡ (46.09P)</td>
        </tr>
        <tr>
          <th>대지면적</th>
          <td>142.81㎡ (43.2P)</td>
        </tr>
        <tr>
          <th>용도지역</th>
          <td>제2종일반주거지역</td>
        </tr>
        <tr>
          <th>주용도</th>
          <td>제2종근린생활시설</td>
        </tr>
        <tr>
          <th>냉방시설</th>
          <td>개별난방</td>
        </tr>
        <tr>
          <th>승강시설</th>
          <td>없음</td>
        </tr>
        <tr>
          <th>주차시설</th>
          <td></td>
        </tr>
      </table>
    </div>

    <!-- Price -->
    <div class="box-con">
      <h3 class="box-con__title">가격정보</h3>
      <table class="property-table">
        <tr>
          <th>매매가 (건물전체)</th>
          <td>37억원 ( 연면적당 8,028만원 / 대지면적당 8,565만원 )</td>
        </tr>
        <tr>
          <th></th>
          <td></td>
        </tr>
      </table>
    </div>
  </div>

  <script src="../public/js/script.js" defer></script>

  <?php include '../includes/footer.php'; ?>

</body>

</html>