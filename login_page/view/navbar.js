function changeImgHeart(el) {
  el.src = "Images\\r.heart.png";
}

function fixImgHeart(el) {
  el.src = "Images\\w.heart.png";
}

function changeImgDirect(es) {
  es.src = "Images\\o.direct.png";
}

function fixImgDirect(es) {
  es.src = "Images\\w.direct.png";
}

function changeImgHome(ep) {
  ep.src = "Images\\p.home.png";
}

function fixImgHome(ep) {
  ep.src = "Images\\w.home.png";
}

function openPage(pageName, elmnt, color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {}
  document.getElementById(pageName).style.display = "block";
}
