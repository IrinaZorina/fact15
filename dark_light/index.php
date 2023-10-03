<?php
$time = date("H");

if (($time >= 7) && ($time < 20))
    { $myStyleVar = 'light.css';
}
else {
      $myStyleVar = 'dark.css';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/<?php echo $myStyleVar ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Nunito:wght@200&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Nunito:wght@200&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@200&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mitr:wght@200&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>INTERIA</title>
  </head>

  <body>
    <!-- HEADER -->
    
    <header id="header" class="header">
      <div class="container header__container">
        <nav class="header__container__nav">
          <a class="header__container__nav--logo" href="#"><?php echo $time ?></a>
          <ul class="header__container__nav--menu">
            <li class="menu-item">
              <a href="#">home</a>
            </li>
            <li class="menu-item">
              <a href="#">pages</a>
            </li>
            <li class="menu-item">
              <a href="#">services</a>
            </li>
            <li class="menu-item">
              <a href="#">team</a>
            </li>
            <li class="menu-item">
              <a href="#">blog</a>
            </li>
          </ul>
          <form action="#" class="header__container__nav__form">
            <button type="button" class="header__container__nav__form--btn">
              Get started
            </button>
          </form>
        </nav>

        <!-- HERO-SECTION -->
        <div class="hero-section">
          <div class="main__container__hero-section__tittle">
            <h1 class="main__container__hero-section__tittle--intro">
              We design your room aesthetic
            </h1>
            <p class="main__container__hero-section__tittle--text">
              Lectus quam id leo in vitae turpis nisi porta lorem mollis.
            </p>
          </div>
          <div class="main__container__hero-section-btn">
            <img src="img/play_button.svg" alt="play_button" />
          </div>
          <h2 class="main__container__hero-section__swipe">
            <a href="#" class="main__container__hero-section__swipe--text">
              Swipe down
            </a>
          </h2>
        </div>
      </div>
    </header>

    <!-- MAIN -->
    <main id="main" class="main">
      <div class="container">
        <!-- SECTION 1 -->
        <div class="section-one">
          <h2 class="section-one--about">about</h2>
          <h1 class="section-one--intro">
            We are the best interior design studio in london
          </h1>
          <p class="section-one--text">
            Posuere urna nec tincidunt praesent. Egestas maecenas pharetra
            convallis posuere. Ipsum nunc aliquet bibendum enim. Sem integer
            vitae justo eget magna fermentum iaculis eu non.
          </p>
        </div>

        <!-- SECTION 2 -->
        <div class="section-two">
          <img src="img/IMG1.svg" alt="image" class="section-two--img1" />
          <img src="img/IMG2.svg" alt="image" class="section-two--img2" />
          <img src="img/IMG3.svg" alt="image" class="section-two--img3" />
          <dl class="section-two--group-one">
            <dt>2K+</dt>
            <dd>PROJECTSDONE</dd>
          </dl>
          <dl class="section-two--group-two">
            <dt>20+</dt>
            <dd>PRO TEAMS</dd>
          </dl>
          <dl class="section-two--group-three">
            <dt>300+</dt>
            <dd>GLOBALCLIENTS</dd>
          </dl>
          <form action="#" class="section-two__form">
            <button type="button">LEARN ABOUT</button>
          </form>
        </div>

        <!-- SECTION 3 -->
        <div class="section-three">
          <div class="section-three__bg">
            <div class="section-three__bg--mask">
              <img
                src="img/Ellipse.svg"
                alt="Ellipse"
                class="section-three__bg__mask--img"
              />
            </div>
          </div>
          <h1 class="section-three--intro">
            Blending creativity and functionality in every design
          </h1>
          <form action="#" class="section-three__btn">
            <button type="button" class="section-three__btn--text">
              HIRE US NOW
            </button>
          </form>
        </div>

        <!-- SECTION 4 -->
        <div class="section-four">
          <div class="section-four__tittle">
            <h2 class="section-four__tittle--teams">TEAMS</h2>
            <h1 class="section-four__tittle--intro">
              Projects are handled by professional certified teams
            </h1>
            <p class="section-four__tittle--text">
              Posuere urna nec tincidunt praesent egestas maecenas pharetra
              convallis posuere ipsum nunc aliquet bibendum enim consectetur
              adipiscing.
            </p>
          </div>
          <div class="section-four__reviews">
            <div class="section-four__reviews--avatars">
              <img src="img/Ellipse-2.svg" alt="image" class="avatars" />
              <img src="img/Ellipse-3.svg" alt="image" class="avatars" />
              <img src="img/Ellipse-4.svg" alt="image" class="avatars" />
              <img src="img/Ellipse-5.svg" alt="image" class="avatars" />
            </div>
            <div class="section-four__reviews--frame">
              <img src="img/star.svg" alt="image" class="frame" />
              <img src="img/star.svg" alt="image" class="frame" />
              <img src="img/star.svg" alt="image" class="frame" />
              <img src="img/star.svg" alt="image" class="frame" />
              <img src="img/star-half-alt.svg" alt="image" class="frame" />
            </div>
            <p class="section-four--text-one">(4.5 reviews)</p>
            <p class="section-four--text-two">TRUSTED BY CUSTOMERS</p>
          </div>
          <img src="img/team1.svg" alt="image" class="section-four-img" />
          <img src="img/team2.svg" alt="image" class="section-four-img" />
          <img src="img/team3.svg" alt="image" class="section-four-img" />
          <form action="#" class="section-four--btn">
            <button type="button" class="section-four__btn--text">
              LEARN TEAMS
            </button>
          </form>
        </div>

        <!-- SECTION 5 -->
        <div class="section-five">
          <div class="section-five__logo-one">
            <img
              src="img/Vector.svg"
              alt="image"
              class="section-five__logo-one--image"
            />
            <img
              src="img/Vector-1.svg"
              alt="image"
              class="section-five__logo-one--image"
            />
            <img
              src="img/Vector-2.svg"
              alt="image"
              class="section-five__logo-one--image"
            />
            <img
              src="img/Vector-3.svg"
              alt="image"
              class="section-five__logo-one--image"
            />
            <img
              src="img/Vector-4.svg"
              alt="image"
              class="section-five__logo-one--image"
            />
            <b class="section-five__logo-one--text">Sparta .Inc</b>
          </div>
          <div class="section-five__logo-two">
            <img
              src="img/Vector-5.svg"
              alt="image"
              class="section-five__logo-two--image"
            />
            <b class="section-five__logo-two--text">Allianzy</b>
          </div>
          <div class="section-five__logo-three">
            <b class="section-five__logo-three--text">Reys Ceramics</b>
          </div>
          <div class="section-five__logo-four">
            <img
              src="img/Vector-6.svg"
              alt="image"
              class="section-five__logo-four--image"
            />
            <b class="section-five__logo-four--text">Fuda Furniture</b>
          </div>
        </div>

        <!-- SECTION 6 -->
        <div class="section-six">
          <div class="section-six__services">
            <h1 class="section-six__services--intro">01. Interior design</h1>
            <p class="section-six__services--text">
              Posuere urna nec tincidunt praesent egestas maecenas pharetra
              convallis posuere ipsum nunc aliquet bibendum enim consectetur
              adipiscing.
            </p>
            <form action="#" class="section-six__services__btn">
              <button type="button" class="section-six__services__btn__text">
                LEARN MORE
                <img
                  src="img/angle-right.svg"
                  alt="angle-righ"
                  class="section-six__services__btn__text--image"
                />
              </button>
            </form>
          </div>
          <div class="section-six__services">
            <h1 class="section-six__services--intro">02. Furniture design</h1>
            <p class="section-six__services--text">
              Posuere urna nec tincidunt praesent egestas maecenas pharetra
              convallis posuere ipsum nunc aliquet bibendum enim consectetur
              adipiscing.
            </p>
            <form action="#" class="section-six__services__btn">
              <button type="button" class="section-six__services__btn__text">
                LEARN MORE
                <img
                  src="img/angle-right.svg"
                  alt="angle-righ"
                  class="section-six__services__btn__text--image"
                />
              </button>
            </form>
          </div>
          <div class="section-six__service-three">
            <h1 class="section-six__services--intro">03. Landscape design</h1>
            <p class="section-six__services--text">
              Posuere urna nec tincidunt praesent egestas maecenas pharetra
              convallis posuere ipsum nunc aliquet bibendum enim consectetur
              adipiscing.
            </p>
            <form action="#" class="section-six__services__btn">
              <button type="button" class="section-six__services__btn__text">
                LEARN MORE
                <img
                  src="img/angle-right.svg"
                  alt="angle-righ"
                  class="section-six__services__btn__text--image"
                />
              </button>
            </form>
          </div>
        </div>

        <!-- SECTION 7 -->
        <div class="section-seven">
          <img src="img/IMG4.svg" alt="image" class="section-seven--image" />
          <img src="img/IMG5.svg" alt="image" />
          <img src="img/IMG6.svg" alt="image" />
          <img src="img/IMG7.svg" alt="image" />
        </div>

        <!-- SECTION 8 -->
        <div class="section-eight">
          <h2 class="section-eight--blog">BLOG</h2>
          <h1 class="section-eight--intro">The latest article</h1>
          <article class="blog">
            <h2 class="visually-hidden">blog</h2>
            <img src="img/Rectangle-15.svg" alt="image" class="blog--image" />
            <p class="blog--text">
              Posuere urna nec tincidunt praesent egestas maecenas.
            </p>
            <form action="#" class="blog__btn">
              <button type="button" class="blog__btn__text">
                LEARN MORE
                <img
                  src="img/angle-right.svg"
                  alt="angle-righ"
                  class="blog__btn__text--image"
                />
              </button>
            </form>
          </article>
          <article class="blog">
            <h2 class="visually-hidden">blog</h2>
            <img src="img/Rectangle-16.svg" alt="image" class="blog--image" />
            <p class="blog--text">
              Posuere urna nec tincidunt praesent egestas maecenas.
            </p>
            <form action="#" class="blog__btn">
              <button type="button" class="blog__btn__text">
                LEARN MORE
                <img
                  src="img/angle-right.svg"
                  alt="angle-righ"
                  class="blog__btn__text--image"
                />
              </button>
            </form>
          </article>
          <article class="blog">
            <h2 class="visually-hidden">blog</h2>
            <img src="img/Rectangle-17.svg" alt="image" class="blog--image" />
            <p class="blog--text">
              Posuere urna nec tincidunt praesent egestas maecenas.
            </p>
            <form action="#" class="blog__btn">
              <button type="button" class="blog__btn__text">
                LEARN MORE
                <img
                  src="img/angle-right.svg"
                  alt="angle-righ"
                  class="blog__btn__text--image"
                />
              </button>
            </form>
          </article>
        </div>

        <!--  SECTION 9 -->
        <div class="section-nine">
          <h1 class="section-nine--intro">Newsletter</h1>
          <div class="section-nine__frame">
            <input
              type="text"
              placeholder="Enter your email"
              class="section-nine__frame--input"
            />
            <form action="#" class="section-nine__frame__btn">
              <button type="button" class="section-nine__frame__btn__text">
                SUBSCRIBE
              </button>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!--  FOOTER -->
    <footer id="footer" class="footer">
      <div class="container">
        <nav class="footer__container">
          <ul class="footer__container--menu">
            <li><a href="#">home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">services</a></li>
            <li><a href="#">team</a></li>
            <li><a href="#">blog</a></li>
            <li><a href="#">contact</a></li>
          </ul>
          <a href="#" class="footer__container--logo">INTERIA</a>
        </nav>
        <div class="footer__container--social">
          <div class="facebook footer_media">
            <a href="#">
              <img src="img/Ellipse-6.svg" alt="image" />
              <img src="img/facebook-f.svg" alt="facebook" />
            </a>
          </div>
          <div class="twitter footer_media">
            <a href="#">
              <img src="img/Ellipse-6.svg" alt="image" />
              <img src="img/twitter.svg" alt="twitter" />
            </a>
          </div>
          <div class="linkedin footer_media">
            <a href="#">
              <img src="img/Ellipse-6.svg" alt="image" />
              <img src="img/linkedin-in.svg" alt="linkedin" />
            </a>
          </div>
          <div class="instagram footer_media">
            <a href="#">
              <img src="img/Ellipse-6.svg" alt="image" />
              <img src="img/instagram.svg" alt="instagram" />
            </a>
          </div>
        </div>
        <p class="footer__container--text">
          Posuere urna nec tincidunt praesent egestas maecenas pharetra
          convallis posuere ipsum nunc.
        </p>
        <div class="copyright">
          <p class="copyright--text">
            © Copyright by AltDesain-Studio – All right reserved.
          </p>
          <a href="#" class="copyright--terms">TERMS</a>
          <a href="#" class="copyright-privacy">PRIVACY</a>
        </div>
      </div>
    </footer>
  </body>
</html>
