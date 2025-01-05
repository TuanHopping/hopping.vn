<!DOCTYPE html>
<html lang="kr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/responsive.css" />
  <title>부동산 - 매매</title>
  <!-- Favicon -->
  <link
    rel="shortcut icon"
    href="./images/logo/favicon.png"
    type="image/x-icon" />
</head>

<body>
  <!-- HEADER -->
  <?php include("./includes/header.php"); ?>

  <div class="container">
    <!-- Photo wrapper -->
    <div class="product-photo-wrapper">
      <div class="main-photo">
        <img
          class="img-feature"
          src="./images/reality/nice_life_hotel/nice_life_hotel_1.jpg"
          alt="" />
        <div class="controls prev">
          <svg
            fill="#fff"
            height="40px"
            width="40px"
            version="1.1"
            id="Capa_1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 55.753 55.753"
            xml:space="preserve">
            <g>
              <path
                d="M12.745,23.915c0.283-0.282,0.59-0.52,0.913-0.727L35.266,1.581c2.108-2.107,5.528-2.108,7.637,0.001
             c2.109,2.108,2.109,5.527,0,7.637L24.294,27.828l18.705,18.706c2.109,2.108,2.109,5.526,0,7.637
             c-1.055,1.056-2.438,1.582-3.818,1.582s-2.764-0.526-3.818-1.582L13.658,32.464c-0.323-0.207-0.632-0.445-0.913-0.727
             c-1.078-1.078-1.598-2.498-1.572-3.911C11.147,26.413,11.667,24.994,12.745,23.915z" />
            </g>
          </svg>
        </div>
        <div class="controls next">
          <svg
            fill="#fff"
            height="40px"
            width="40px"
            version="1.1"
            id="Capa_1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 55.752 55.752"
            xml:space="preserve">
            <g>
              <path
                d="M43.006,23.916c-0.28-0.282-0.59-0.52-0.912-0.727L20.485,1.581c-2.109-2.107-5.527-2.108-7.637,0.001
             c-2.109,2.108-2.109,5.527,0,7.637l18.611,18.609L12.754,46.535c-2.11,2.107-2.11,5.527,0,7.637c1.055,1.053,2.436,1.58,3.817,1.58
             s2.765-0.527,3.817-1.582l21.706-21.703c0.322-0.207,0.631-0.444,0.912-0.727c1.08-1.08,1.598-2.498,1.574-3.912
             C44.605,26.413,44.086,24.993,43.006,23.916z" />
            </g>
          </svg>
        </div>
      </div>
      <!-- List hình nhỏ -->
      <div class="list-image">
        <div class="list-image-file">
          <img
            src="./images/reality/nice_life_hotel/nice_life_hotel_2.jpg"
            alt="" />
        </div>
        <div class="list-image-file">
          <img
            src="./images/reality/nice_life_hotel/nice_life_hotel_3.jpg"
            alt="" />
        </div>
        <div class="list-image-file">
          <img
            src="./images/reality/nice_life_hotel/nice_life_hotel_4.jpg"
            alt="" />
        </div>
        <div class="list-image-file">
          <img
            src="./images/reality/nice_life_hotel/nice_life_hotel_5.jpg"
            alt="" />
        </div>
        <div class="list-image-file">
          <img
            src="./images/reality/nice_life_hotel/nice_life_hotel_6.jpg"
            alt="" />
        </div>
      </div>
    </div>

    <!-- 매물정보 -->
    <div class="box-con">
      <h2>매물정보</h2>
      <table>
        <tr>
          <th>매물종류</th>
          <td>건물 (빌딩)</td>
        </tr>
        <tr>
          <th>소재지</th>
          <td>서울 용산구 후암동</td>
        </tr>
        <tr>
          <th>규모</th>
          <td>지하/지상2층 (Basement/2 Floors)</td>
        </tr>
        <tr>
          <th>연면적</th>
          <td>152.36 m² <span class="units">(46.09 Pyeong)</span></td>
        </tr>
        <tr>
          <th>대지면적</th>
          <td>142.81 m² <span class="units">(43.2 Pyeong)</span></td>
        </tr>
        <tr>
          <th>용도지역</th>
          <td>제2종일반주거지역 (Type 2 General Residential Area)</td>
        </tr>
        <tr>
          <th>주용도</th>
          <td>제2종근린생활시설 (Type 2 Neighborhood Living Facilities)</td>
        </tr>
        <tr>
          <th>냉방시설</th>
          <td>- (None)</td>
        </tr>
        <tr>
          <th>승강시설</th>
          <td>없음 (None)</td>
        </tr>
        <tr>
          <th>주차시설</th>
          <td>없음 (None)</td>
        </tr>
      </table>
    </div>

    <!-- 가격정보 -->
    <div class="box-con">
      <h2>가격정보</h2>
      <table>
        <tr>
          <th>매매가 (건물전체)</th>
          <td>37억원 ( 연면적당 8,028만원 / 대지면적당 8,565만원 )</td>
        </tr>
        <tr>
          <th>융자금</th>
          <td>서울 용산구 후암동</td>
        </tr>
      </table>
    </div>

    <h3>위치 및 주변정보</h3>
  </div>

  <!-- JS -->
  <script src="./js/controls.js"></script>

  <!-- FOOTER -->
  <?php include("./includes/footer.php"); ?>
</body>

</html>