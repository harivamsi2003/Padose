<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Padose
    </title>
    <link rel="icon" href="/Padose/padose2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="padose.css">
</head>
<body>
    <nav class="navb">
        <img src="header.png" class="navheader">
        <div class="logocon">
            <img src="padose2.png" class="logoc">
        </div>
        <div class="navbar">
            
            <div class="nav-logo">
                <div class="logo border"></div>
            </div>
            <div class="about" id="about">
                <a href="#about" class="abou"><?php echo $lang['About'] ?></a>
            </div>
            <div class="features">
                <a href="#shift" class="feat"><?php echo $lang['Features'] ?></a>
            </div>
            <div class="dropdown">
                <div class="select" id="selectmenu">
                    <a href="#" class="selected" style="text-decoration: none; color: white;"><?php echo $lang['English'] ?></a>
                    <div class="caret"></div>
                </div>
                <div class="menu" id="menulist">
                    <li class="menulink"><a href="padose.php?lang=English#" style="text-decoration: none; color: white;" class="menuLink">English</a></li>
                    <li class="menulink"><a href="padose.php?lang=Hindi#" style="text-decoration: none; color: white;" class="menuLink">हिंदी</a></li>
                    <li class="menulink"><a href="padose.php?lang=Telugu#" style="text-decoration: none; color: white;" class="menuLink">తెలుగు</a></li>
                    <li class="menulink"><a href="padose.php?lang=Kannada#" style="text-decoration: none; color: white;" class="menuLink">ಕನ್ನಡ</a></li>
                    <li class="menulink"><a href="padose.php?lang=Tamil#" style="text-decoration: none; color: white;" class="menuLink">தமிழ்</a></li>
                </div>
            </div>
        </div>
    </nav>
    <div class="im1">
        <div class="im2">
            <img src="vegetables.png" alt="img" style="width: 100%;">
            <p class="text"><?php echo $lang['A platform that connects'] ?><br><?php echo $lang['customers to streetvendors and'] ?><br><?php echo $lang['local shops!'] ?></p>
            <a href="#" class="downloadpadose">Download Padose</a>
        </div>
        <div class="buy-sell">
            <a href="#" class="buyer" id="buyerlink"><?php echo $lang['Buyer'] ?></a>
            <a href="#" class="seller" id="sellerlink"><?php echo $lang['Seller'] ?></a>
        </div>
    </div>
    <div class="shift" id="shift">
        <div class="byr" id="buyerdata">
            <div class="sec1byr" id="sec1byr">
                <div class="byr1">
                    <img src="buyerimg1.png" alt="img" class="img1byr">
                    <figcaption class="cap1byr">
                        <?php echo $lang['Game changing inconvenience to convenience'] ?>
                    </figcaption>
                </div>
                <div class="byr2">
                    <img src="buyerimg2.png" alt="img" class="img2byr">
                    <figcaption class="cap2byr">
                        <?php echo $lang['Instantly Fresh: Fresh vegetables and fruits to'] ?><br><?php echo $lang['home in no time.'] ?>
                    </figcaption>
                </div>
                <div class="byr3">
                    <img src="buyerimg3.png" alt="img" class="img3byr">
                    <figcaption class="cap3byr">
                        <?php echo $lang['Our smart app is easy to track your profits'] ?>
                    </figcaption>
                </div>
                <div class="byr4">
                    <img src="buyerimg4.png" alt="img" class="img4byr">
                    <figcaption class="cap4byr">
                        <?php echo $lang['No more waiting for days for emergency or urgent'] ?><br><?php echo $lang['orders.'] ?>
                    </figcaption>
                </div>
                <div class="byr5">
                    <img src="buyerimg5.png" alt="img" class="img5byr">
                    <figcaption class="cap5byr">
                        <?php echo $lang['Easy ordering!'] ?>
                    </figcaption>
                </div>
                <div class="byr6">
                    <img src="buyerimg6.png" alt="img" class="img6byr">
                    <figcaption class="cap6byr">
                        <?php echo $lang['We priorotize food and products that is locally-'] ?><br><?php echo $lang['grown, seasonal and sold from local people.'] ?>
                    </figcaption>
                </div>
            </div>
            <img src="buyerimg7-2.png" alt="img" class="img7byr">
            <img src="buyerimg8.png" alt="img" class="img8byr">
        </div>
        <div class="slr" id="sellerdata">
            <div class="sec1slr" id="sec1slr">
                <div class="slr1">
                    <img src="sellerimg1.png" alt="img" class="img1slr">
                    <figcaption class="cap1slr">
                        <?php echo $lang['Sell more with increased product offerings and'] ?><br><?php echo $lang['more personal interaction.'] ?>
                    </figcaption>
                </div>
                <div class="slr2">
                    <img src="sellerimg2.png" alt="img" class="img2slr">
                    <figcaption class="cap2slr">
                        <?php echo $lang['Dont miss the opportunity to boost your livelihood'] ?><br><?php echo $lang['and be happier, more stisfied seller.'] ?>
                    </figcaption>
                </div>
                <div class="slr3">
                    <img src="sellerimg3.png" alt="img" class="img3slr">
                    <figcaption class="cap3slr">
                        <?php echo $lang['Our smart app is easy to track your profits'] ?>
                    </figcaption>
                </div>
                <div class="slr4">
                    <img src="sellerimg4.png" alt="img" class="img4slr">
                    <figcaption class="cap4slr">
                        <?php echo $lang['We are here to help you stock up on your produce'] ?><br><?php echo $lang['based on your sales.'] ?>
                    </figcaption>
                </div>
            </div>
            <img src="sellerimg5.png" alt="img" class="img5slr" id="img5slr">
            <img src="sellerimg6.png" alt="img" class="img6slr" id="img6slr">
        </div>
    </div>
    <div class="playcenter">
        <div class="playstore" id="playstore">
            <button href="#" class="playstorelink" id="playstorelink"><div class="contentplay"><span class="getiton">GET IT ON</span><br><div class="tempplay"><svg class="play1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="100" viewBox="0,0,256,256">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M7.705,4.043c-0.413,0.107 -0.705,0.464 -0.705,1.078c0,1.802 0,18.795 0,18.795c0,0 0,18.364 0,19.175c0,0.446 0.197,0.745 0.5,0.856l20.181,-20.064z" fill="#4db6ac"></path><path d="M33.237,18.36l-8.307,-4.796c0,0 -15.245,-8.803 -16.141,-9.32c-0.388,-0.224 -0.77,-0.283 -1.084,-0.201l19.977,19.84z" fill="#78ed5e"></path><path d="M8.417,43.802c0.532,-0.308 15.284,-8.825 24.865,-14.357l-5.601,-5.562l-20.181,20.064c0.248,0.091 0.566,0.057 0.917,-0.145z" fill="#d32f2f"></path><path d="M41.398,23.071c-0.796,-0.429 -8.1,-4.676 -8.1,-4.676l-0.061,-0.035l-5.556,5.523l5.601,5.562c4.432,-2.559 7.761,-4.48 8.059,-4.653c0.944,-0.544 0.853,-1.292 0.057,-1.721z" fill="#fbc02d"></path></g></g>
                </svg><span class="play">Google Play</span></div></div>
            </button>
            <!-- <div class="social">
                <a href="#" class="instagram"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 30 30"><path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"></path></svg></a>
                <a href="#" class="facebook"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50"><path d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z"></path></svg></a>
                <a href="#" class="twitter"><ion-icon name="logo-twitter"></ion-icon></a>
            </div> -->
            <img src="footerimg2.png" alt="img" class="footerimg" id="footerimg">
        </div>
    </div>
    </div>
    <script src="padose.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const aboutElement = document.querySelector(".about");
            const languageSelect = document.getElementById("languageSelect");

            languageSelect.addEventListener("change", function() {
                const selectedLanguage = this.value;
                if (selectedLanguage === "Tamil") {
                    aboutElement.style.left = "10%";
                } else {
                    aboutElement.style.left = "0";
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const buyerLink = document.getElementById("buyerlink");
            const sellerLink = document.getElementById("sellerlink");
            const playstore = document.getElementById("playstore");
            const img5sl = document.getElementById("img5slr");
            const img6sl = document.getElementById("img6slr");
        });

        document.addEventListener("DOMContentLoaded", function() {
            const mediaQuery1 = window.matchMedia('(max-width: 1600px)');
            if(mediaQuery1.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                buyerLink.addEventListener("click", function() {
                    playstore.style.top = "330%";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.top = "280%";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "94em";
                    img6sl.style.top = "94em";
                });
            }

            const mediaQuery1_1 = window.matchMedia('(max-width: 1500px)');
            if(mediaQuery1_1.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(70%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(160%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "96em";
                    img6sl.style.top = "96em";
                });
            }

            const mediaQuery1_2 = window.matchMedia('(max-width: 1400px)');
            if(mediaQuery1_2.matches){
                const sellerLink = document.getElementById("sellerlink");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(160%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "92em";
                    img6sl.style.top = "92em";
                });
            }

            const mediaQuery2 = window.matchMedia('(max-width: 1300px)');
            if (mediaQuery2.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.top = "-40em";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(170%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "86em";
                    img6sl.style.top = "86em";
                });
            }

            const mediaQuery3 = window.matchMedia('(max-width: 1200px)');
            if(mediaQuery3.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(188%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(170%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "80em";
                    img6sl.style.top = "80em";
                });
            }

            const mediaQuery4 = window.matchMedia('(max-width: 1100px)');
            if(mediaQuery4.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(198%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(170%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "73em";
                    img6sl.style.top = "73em";
                });
            }

            const mediaQuery5 = window.matchMedia('(max-width: 1000px)');
            if(mediaQuery5.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(215%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(170%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "68em";
                    img6sl.style.top = "68em";
                });
            }

            const mediaQuery6 = window.matchMedia('(max-width: 900px)');
            if(mediaQuery6.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(239%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(175%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "63em";
                    img6sl.style.top = "63em";
                });
            }

            const mediaQuery7 = window.matchMedia('(max-width: 800px)');
            if(mediaQuery7.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(259%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(195%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "60em";
                    img6sl.style.top = "60em";
                });
            }

            const mediaQuery8 = window.matchMedia('(max-width: 700px)');
            if(mediaQuery8.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(275%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(195%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "57em";
                    img6sl.style.top = "57em";
                });
            }

            const mediaQuery9 = window.matchMedia('(max-width: 600px)');
            if(mediaQuery9.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(305%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(220%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "52em";
                    img6sl.style.top = "52em";
                });
            }

            const mediaQuery10 = window.matchMedia('(max-width: 500px)');
            if(mediaQuery10.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(339%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(235%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "47em";
                    img6sl.style.top = "47em";
                });
            }

            const mediaQuery11 = window.matchMedia('(max-width: 401px)');
            if(mediaQuery11.matches){
                const buyerLink = document.getElementById("buyerlink");
                const sellerLink = document.getElementById("sellerlink");
                const playstore = document.getElementById("playstore");
                const img5sl = document.getElementById("img5slr");
                const img6sl = document.getElementById("img6slr");
                buyerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(395%)";
                });
                sellerLink.addEventListener("click", function() {
                    playstore.style.transform = "translateY(245%)";
                    playstore.style.zIndex = "1";
                    img5sl.style.top = "45em";
                    img6sl.style.top = "45em";
                });
            }
        });
    </script>
</body>
</html>