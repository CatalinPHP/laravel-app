// Get the modal
var images = document.getElementsByClassName('gallery-image-style');

for (var i = 0; i < images.length; i++) {
    var img = images[i].children.myImg;
    var modal = images[i].children.myModal
// Get the image and insert it inside the modal - use its "alt" text as a caption
    var modalImg = modal.children['img'];
    var captionText = modal.children['caption'];
    var resolution = modal.children['resolution'];
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

// Get the <span> element that closes the modal
    var span = modal.childNodes[1];
// When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    resolution.onchange = function () {
        var resolutionValue = resolution.value;
        console.log(resolutionValue + "%");
        modalImg.style.width = resolutionValue + "%";
    }
}
