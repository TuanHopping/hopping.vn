// Mobile Menu //
document.addEventListener("click", function (event) {
  var navLinks = document.getElementById("navLinks");
  var isClickedOnMenu = navLinks.contains(event.target); // Kiểm tra click trong menu
  var isHamburgerIcon = event.target.classList.contains("hamburger-icon");

  if (!isClickedOnMenu && !isHamburgerIcon) {
    navLinks.classList.remove("active");
  }
});

function toggleMenu() {
  var navLinks = document.getElementById("navLinks");
  navLinks.classList.toggle("active");
}

// Carousel //
const mainImage = document.getElementById("mainImage");
const thumbnails = document.querySelectorAll(".thumbnail");

thumbnails.forEach((thumbnail) => {
  thumbnail.addEventListener("click", () => {
    mainImage.src = thumbnail.dataset.src;
  });
});
