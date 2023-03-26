function opneMenu() {
  document.querySelector('.menu-mobile').style.display = 'flex';
};

function closeMenu() {
  document.querySelector('.menu-mobile').style.display = 'none';
};

function closeBanner() {
  document.getElementById('popup').style.display = 'none';
}

window.onload = () => {
  document.querySelector('.container-geral').style.display = "block"
  document.querySelector('.loading').style.display = "none"
}