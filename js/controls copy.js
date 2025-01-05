var imgFeature = document.querySelector(".img-feature");
var listImg = document.querySelectorAll(".list-image img");
var prevBtn = document.querySelectorAll("prev");
var nextBtn = document.querySelectorAll("next");

listImg.forEach(imgElement => {
    imgElement.addEventListener('click', e => {
        imgFeature.src = e.target.getAttribute('src'))
}})
