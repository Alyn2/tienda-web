window.addEventListener("load", function() {
    var images = document.querySelectorAll("#banner img");
    var currentImage = 0;
    var maxImages = images.length;

    function rotateImages() {
      images[currentImage].style.opacity = 0;
      currentImage = (currentImage+1) % maxImages;
      images[currentImage].style.opacity = 1;
    }

    setInterval(rotateImages, 2000);

    showImage(0);
  });