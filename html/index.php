<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    $time = date("H:i:s");

    if($time >= 08.00 || $time <= 20.00) {
        echo '<link rel="stylesheet" href="../css/style_daylight.css">';
    }else {
        echo '<link rel="stylesheet" href="../css/style_night.css">';
    };
    ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Nunito&display=swap" rel="stylesheet">
    <title>Design</title>

</head>
<body>
    <header class="header">
<!--        <img src="../img/BG-header.jpg" alt="">-->
            <div class="header__link">
                <div class="header__link_one">
                    <a href="#">INTERIA</a>
                </div>
                <div class="header__link_two">
                    <a class="header__link_two_one" href="#">home</a>
                    <a class="header__link_two_two" href="#">pages</a>
                    <a class="header__link_two_three" href="#">services</a>
                    <a class="header__link_two_four" href="#">team</a>
                    <a class="header__link_two_five" href="#">blog</a>
                    <a class="header__link_two_six" href="#">GET STARTED</a>
                </div>
            </div>
        <div class="header__title">
            <h1 class="header__title_h">We design your room aesthetic</h1>
            <p class="header__title_paragraph ">Lectus quam id leo in vitae turpis nisi porta lorem mollis.</p>
        </div>
        <span class="header__other_span">SWIPE DOWN</span>
    </header>
    <section class="section-one">
        <div class="section-one__wrapper">
            <div class="section-one__wrapper_one">
                <small class="section-one__wrapper_small">ABOUT</small>
                <h1 class="section-one__wrapper_headone">We are the best interior design studio in london</h1>
                <p class="section-one__wrapper_paragraph">Posuere urna nec tincidunt praesent. Egestas maecenas pharetra convallis posuere. Ipsum nunc aliquet bibendum enim. Sem integer vitae justo eget magna fermentum iaculis eu non.</p>
            </div>
            <div class="section-one__wrapper_two">
                <img src="../img/section-one-IMG1.jpg" alt="">
                <img src="../img/section-one-IMG2.jpg" alt="">
                <img src="../img/section-one-IMG3.jpg" alt="">
                <a href="#">LEARN ABOUT</a>
                <div class="section-one__wrapper_elem">
                    <div>
                        <span class="section-one__wrapper_spanone">2K+</span>
                        <span class="section-one__wrapper_spantwo">PROJECTS DONE</span>
                    </div>
                    <div>
                        <span class="section-one__wrapper_spanone">20+</span>
                        <span class="section-one__wrapper_spantwo">PRO TEAMS</span>
                    </div>
                    <div class="EXPERIMENT">
                        <span class="section-one__wrapper_spanone">300+</span>
                        <span class="section-one__wrapper_spantwo">GLOBAL CLIENTS</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-two">
        <div class="section-two__container">
            <img class="section-two__image" src="../img/section-two-Ellipse%202.jpg" alt="Ellipse">
            <div class="section-two__wrapper">
                <h1 class="section-two__wrapper_title">Blending creativity and functionality in every design</h1>
                <a class="section-two__wrapper_link" href="#">HIRE US NOW</a>
            </div>
        </div>
    </section>
    <section class="section-three">
        <div class="section-three__container">
            <div class="section-three__container_one">
                <small>TEAMS</small>
                <h1>Projects are handled by  professional certified teams</h1>
                <p>Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc aliquet bibendum enim consectetur adipiscing.</p>
                <div>
                    <img src="../img/section-three-Ellipse%201.jpg" alt="">
                    <img src="../img/section-three-Ellipse%202.jpg" alt="">
                    <img src="../img/section-three-Ellipse%203.jpg" alt="">
                    <img src="../img/section-three-Ellipse%204.jpg" alt="">
                </div>
                <div>
                    <img src="../img/section-three-Star.svg" alt="Star">
                    <img src="../img/section-three-Star.svg" alt="Star">
                    <img src="../img/section-three-Star.svg" alt="Star">
                    <img src="../img/section-three-Star.svg" alt="Star">
                    <img src="../img/section-three-Star-half-alt.svg" alt="Star half">
                    <span>(4.5 reviews)</span>
                </div>
                <span>TRUSTED BY CUSTOMERS</span>
            </div>
            <div class="section-three__container_two">
                <img src="../img/section-three-team1.jpg" alt="">
                <img src="../img/section-three-team2.jpg" alt="">
                <img src="../img/section-three-team3.jpg" alt="">
                <a href="#">LEARN TEAMS</a>
            </div>
            <div class="section-three__container_three">
                <div  class="section-three__container__three_link">
                    <img src="../img/section-three-company-1.svg" width="40" height="40" alt="">
                    <a href="">Sparta .Inc</a>
                    <img src="../img/section-three-company-2.svg" width="40" height="40" alt="">
                    <a href="">Allianzy</a>
                    <a href="">Reys Ceramics</a>
                    <img src="../img/section-three-company-3.svg" width="40" height="40" alt="">
                    <a href="">Fuda Furniture</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-four">
        <div class="section-four__item">
            <div class="section-four__item_one">01. Interior design</div>
            <div class="section-four__item_two">02. Furniture design</div>
            <div class="section-four__item_tree">03. Landscape design</div>
        </div>
        <div class="section-four__elem">
            <div class="section-four__elem_one">
                <p>Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc aliquet bibendum enim consectetur adipiscing.</p>
                <a href="#">LEARN MORE
                    <img src="../img/angle-right.svg" alt="icon" width="14" height="14">
                </a>
            </div>
            <div class="section-four__elem_two">
                <p>Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc aliquet bibendum enim consectetur adipiscing.</p>
                <a href="#">LEARN MORE
                    <img src="../img/angle-right.svg" alt="icon"  width="14" height="14">
                </a>
            </div>
            <div class="section-four__elem_tree">
                <p>Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc aliquet bibendum enim consectetur adipiscing.</p>
                <a href="#">LEARN MORE
                    <img src="../img/angle-right.svg" alt="icon"  width="14" height="14">
                </a>
            </div>
        </div>
    </section>
    <section class="section-five">
        <div class="section-five__img">
            <img src="../img/IMG1.jpg" alt="image1">
            <img src="../img/IMG2.jpg" alt="image2">
            <img src="../img/IMG3.jpg" alt="image3">
            <img src="../img/IMG4.jpg" alt="image4">
        </div>
    </section>
    <section class="section-six">
        <div class="section-six__container">
            <div class="section-six__wrapper_one">
                <small>BLOG</small>
                <h1>The latest article</h1>
            </div>
            <div class="section-six__wrapper_two">
                <div>
                    <img src="../img/section-six-Rectangle%201.jpg" alt="">
                    <p>Posuere urna nec tincidunt praesent egestas maecenas.</p>
                    <a href="">LEARN MORE</a>
                    <img src="../img/angle-right.svg" alt="">
                </div>
                <div>
                    <img src="../img/section-six-Rectangle%202.jpg" alt="">
                    <p>Posuere urna nec tincidunt praesent egestas maecenas.</p>
                    <a href="">LEARN MORE</a>
                    <img src="../img/angle-right.svg" alt="">
                </div>
                <div>
                    <img src="../img/section-six-Rectangle%203.jpg" alt="">
                    <p>Posuere urna nec tincidunt praesent egestas maecenas.</p>
                    <a href="">LEARN MORE</a>
                    <img src="../img/angle-right.svg" alt="">
                </div>
            </div>
        </div>
        <div class="section-six__wrapper_tree">
            <span>Newsletter</span>
            <form action="" method="">
                <input name="email" type="email" placeholder="Enter your email">
                <button type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__container_one">
                <a class="" href="#">home</a>
                <a class="" href="#">pages</a>
                <a class="" href="#">services</a>
                <a class="" href="#">team</a>
                <a class="" href="#">blog</a>
                <a class="footer__container__one_link" href="#">contact</a>
                <a class="footer__container__one_linktwo" href="#">INTERIA</a>
            </div>
            <div class="footer__container_two">
                <div class="footer__container__two_image">
                    <img src="../img/facebook-f.svg" alt="facebook">
                    <img src="../img/twitter.svg" alt="twitter">
                    <img src="../img/linkedin-in.svg" alt="linkedin">
                    <img src="../img/instagram.svg" alt="instagram">
                </div>
                <div class="footer__container__two_paragraph">
                    <p>Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc.</p>
                </div>
            </div>
            <div class="footer__container_three">
                <span class="footer__container__three_span">© Copyright by AltDesain-Studio – All right reserved.</span>
                <a class="footer__container__three_one" href="">TERMS</a>
                <a class="footer__container__three_two" href="">PRIVACY</a>
            </div>
        </div>
    </footer>
</body>
</html>