<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>부동산</title>
</head>

<body>
  <?php include '../includes/header.php'; ?>

  <div class="container">
    <h2 class="section-title">Property Listings</h2>
    <div class="property-grid">
      <!-- Item 1 -->
      <a href="./nice-life-hotel.php">
        <div class="property-card">
          <div class="ribbon"></div>
          <img src="./images/properties/nice_life_hotel/nice_life_hotel_1.jpg" alt="Property 1" class="property-image">
          <div class="property-description">
            <p class="property-type">For Sale</p>
            <p class="property-title">Nice Life Hotel</p>
            <p class="property-area"> 70.00 AC </p>
          </div>
        </div>
      </a>
      <div class="property-card">
        <div class="ribbon"></div>
        <img src="./images/properties/item-1.jpeg" alt="Property 2" class="property-image">
        <div class="property-description">
          <p class="property-type">For Sale | Commercial Land</p>
          <p class="property-title">1100 County Road 404, Taylor, TX 76574</p>
          <p class="property-area"> 242.00 AC </p>
        </div>
      </div>
      <div class="property-card">
        <div class="ribbon"></div>
        <img src="./images/properties/item-1.jpeg" alt="Property 3" class="property-image">
        <div class="property-description">
          <p class="property-type">For Sale | Commercial Land</p>
          <p class="property-title">1502 Steeds Crossing, Pflugerville, TX 78660, USA</p>
          <p class="property-area"> 8.3 AC </p>
        </div>
      </div>
    </div>
  </div>

  <?php include '../includes/footer.php'; ?>

</body>

</html>