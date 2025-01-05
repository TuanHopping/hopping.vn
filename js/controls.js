var imgFeature = document.querySelector(".img-feature");
var listImg = document.querySelectorAll(".list-image img");

// Handle click events on all thumbnail images
listImg.forEach((imgElement) => {
  imgElement.addEventListener("click", function (event) {
    // Update the main image source directly with the clicked image's source
    imgFeature.src = event.target.src;
  });
});
