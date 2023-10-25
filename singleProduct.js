var mainImage = document.getElementByID('main-img');
var smallImage = document.getElementByClassName('small-img');

// if the first small image is clicked this function will run
// the function targets the main image and replaces it with the small image
smallImage[0].onclick = function(){
  mainImage.src = smallImage[0].src;
}

smallImage[1].onclick = function(){
  mainImage.src = smallImage[1].src;
}

smallImage[2].onclick = function(){
  mainImage.src = smallImage[2].src;
}

smallImage[3].onclick = function(){
  mainImage.src = smallImage[3].src;
}
