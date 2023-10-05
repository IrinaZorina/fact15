<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maket</title>
    <?php
    $time = date("H:i:s");

    if($time >= 08.00 || $time <= 20.00) {
        echo '<link rel="stylesheet" href="styles/styles_daylight.css">';
    }else {
        echo '<link rel="stylesheet" href="styles/styles_nightlight.css">';
    };
    ?>
</head>
<body>
<div class="Hero_section">
    <div class="header">
        <div class="LOGO">INTERIA</div>
        <div class="menu__nav">
            <ul class="block__nav">
                <li><a href="#">home</a></li>
                <li><a href="#">pages</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">team</a></li>
                <li><a href="#">blog</a></li>
            </ul>
        </div>
        <button class="button__start">GET STARTED</button>
    </div>
    <div class="swipe__down">SWIPE DOWN</div>
    <div class="title__1">
        <p>We design your room aesthetic</p>
    </div>
    <div class="title__2">
        <p>Lectus quam id leo in vitae turpis nisi porta lorem mollis.</p>
    </div>
    <div class="block">
        <div class="ellipse">
            <div class="triangle"></div>
        </div>
    </div>
</div>
<div class="block__2">
    <div class="section__1">
        <div class="section1__title1">ABOUT</div>
        <div class="section1__title2">We are the best interior design studio in london</div>
        <div class="section1__title3">
            Posuere urna nec tincidunt praesent. Egestas maecenas pharetra convallis posuere. Ipsum nunc aliquet bibendum enim. Sem integer vitae justo eget magna fermentum iaculis eu non.
        </div>
    </div>
    <div class="section__2">
        <div class="section2__img1"></div>
        <div class="section2__img2"></div>
        <div class="section2__img3"></div>
        <div class="group__1">
            <div class="group1__title1">2K+</div>
            <div class="group1__title2">PROJECTSDONE</div>
        </div>
        <div class="group__2">
            <div class="group2__title1">20+</div>
            <div class="group2__title2">PRO <span>TEAMS</span></div>
        </div>
        <div class="group__3">
            <div class="group3__title1">300+</div>
            <div class="group3__title2">GLOBAL <span>CLIENTS</span></div>
        </div>
        <div class="button__container">
            <button class="button__2">LEARN ABOUT</button>
        </div>
    </div>
</div>

<div class="section__3">
    <div class="section3__text1">Blending creativity and <span>functionality in every design</span></div>
    <button class="hire-button">HIRE US NOW</button>
</div>

<div class="block__3">
    <div class="section__4">
        <div class="title__desk">
            <div class="title__desk__1">TEAMS</div>
            <div class="title__desk__2">Projects are handled by professional certified teams</div>
            <div class="title__desk__3">Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc aliquet bibendum enim consectetur adipiscing.</div>
            <div class="review">
                <div class="avatar__1"></div>
                <div class="frame__1"></div>
            </div>
        </div>
    </div>


</div>












</body>
</html>