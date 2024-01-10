const buyerlink = document.getElementById('buyerlink');
const sellerlink = document.getElementById('sellerlink');
const buyerdata = document.getElementById('buyerdata');
const sellerdata = document.getElementById('sellerdata');
const playstore = document.getElementById('playstore');

window.onload = function(){
    buyerdata.style.display = 'block';
    sellerdata.style.display = 'none';
    const color="#ff7400";
    document.querySelector("a#sellerlink").style.background = 'none';
    document.querySelector("a#buyerlink").style.background = color;
}

buyerlink.addEventListener('click', function (e) {
    e.preventDefault();
    buyerdata.style.display = 'block';
    sellerdata.style.display = 'none';
    const color="#ff7400";
    document.querySelector("a#sellerlink").style.background = 'none';
    document.querySelector("a#buyerlink").style.background = color;
});

sellerlink.addEventListener('click', function (e) {
    e.preventDefault();
    buyerdata.style.display = 'none';
    sellerdata.style.display = 'block';
    const color="#ff7400";
    document.querySelector("a#sellerlink").style.background = color;
    document.querySelector("a#buyerlink").style.background = 'none';
});

const selectElement = document.getElementById('selectmenu');
const menuElement = document.getElementById('menulist');

function toggleMenu() {
  menuElement.style.visibility = menuElement.style.visibility === 'visible' ? 'hidden' : 'visible';
}
selectElement.addEventListener('click', toggleMenu);

document.addEventListener('click', function(event) {
  if (!selectElement.contains(event.target)) {
    menuElement.style.visibility = 'hidden';
  }
});

menuElement.addEventListener('click', function(event) {
  event.stopPropagation();
});

const optionMenu = document.querySelector(".dropdown");
const selectBtn = document.querySelector(".select");
const options = document.querySelectorAll(".menulink");
const sBtntext = document.querySelector(".selected");

selectBtn.addEventListener("click", ()=> optionMenu.classList.toggle("active"))

options.forEach(option => {
  option.addEventListener("click", ()=>{
    let selectedOption = option.querySelector(".menuLink").innerText;
    sBtntext.innerText = selectedOption;

    optionMenu.classList.remove("active");
  })
})