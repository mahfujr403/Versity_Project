var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");

smallimg[0].onclick = function () {
  MainImg.src = smallimg[0].src;
};

for (let i = 0; i < smallimg.length; i++) {
  smallimg[i].onclick = function () {
    MainImg.src = smallimg[i].src;
  };
}
