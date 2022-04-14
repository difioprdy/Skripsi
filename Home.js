const slideshowImages = document.querySelectorAll("#slider #imageSlide");

const nextImagedelay= 2500;
let currImgCounter = 0;

// slideshowImages[currImgCounter].style.display = "block";
slideshowImages[currImgCounter].style.opacity = 1;

setInterval(nextImage,nextImagedelay);

function nextImage(){
    // slideshowImages[currImgCounter].style.display = "none";
    slideshowImages[currImgCounter].style.opacity = 0;
    currImgCounter = (currImgCounter + 1) % slideshowImages.length;
    // slideshowImages[currImgCounter].style.display = "block";
    slideshowImages[currImgCounter].style.opacity = 1;
}