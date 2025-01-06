<?php include '../includes/header.php'; ?>
<div class="container">
  <h2 class="section-title">Property Detail</h2>
  <div class="property-detail">
    <div class="main-image">
      <img src="/images/main_property.jpg" alt="Main Property Image" class="main-img">
    </div>
    <div class="thumbnail-images">
      <img src="./images/property/item-1.jpeg" alt="Thumbnail 1" class="thumbnail">
      <img src="./images/property/item-1.jpeg" alt="Thumbnail 2" class="thumbnail">
      <img src="./images/property/item-1.jpeg" alt="Thumbnail 3" class="thumbnail">
    </div>
  </div>
</div>

<script>
  const mainImage = document.getElementById('main-img');
  const thumbnails = document.querySelectorAll('.thumbnail');

  thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', function() {
      mainImage.src = this.getAttribute('data-main');
    });
  });
</script>

<?php include '../includes/footer.php'; ?>