var modal = document.getElementById("myModal");
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var span = document.getElementsByClassName("close")[0];

$(document).ready(function () {
  $(".img-fluid").on

  span.onclick = function () {
    modal.style.display = "none";
  };
  $(".img-fluid").click(function () {
    modal.style.display = "block";
    modalImg.src = $(this).attr("src");
    console.log("MIRGHOSEIN");
  });
});
