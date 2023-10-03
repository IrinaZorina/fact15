<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <!-- Основная тема -->
    <!-- <link rel="stylesheet" href="styles/styles_nigt.css"> -->  
                            <!-- Смена темы от времени суток -->
    <?php
        $time = date("H");
        // echo $time;
        // $day = "08";
        // $night = "20";
        if ($time >= 8 && $time <= 20){
            echo '<link rel="stylesheet" href="styles/styles_day.css">';
        }else{
            echo  '<link rel="stylesheet" href="styles/styles_night.css">';
            } 
    ?>

    
    <title>Проект</title>
</head>
<!-- Навигация -->

<body>
    <header>
        <div class="logo">
            <nav>
                <div class="menu">
                    <ul class="menu_item">
                        <li class="item_list header_list"><a href="#">INTERIA</a></li>
                        <li class="item_list"><a href="#">home</a></li>
                        <li class="item_list"><a href="#">pages</a></li>
                        <li class="item_list"><a href="#">services</a></li>
                        <li class="item_list"><a href="#">team</a></li>
                        <li class="item_list"><a href="#">blog</a></li>
                        <li><a href="#"><input type="submit" value="GET STARTED"  class="button "></a></li>
                    </ul>
                </div>
            </nav>
            
                      <!-- Заголовок -->

            <div class="center">
                <h3>We design your room aesthetic</h3>
                <p>Lectus quam id leo in vitae turpis nisi porta lorem mollis.</p>
            </div>
        </div>
    </header>

    <main>
        <div class="main-page">
            <div class="about">
                    <h3>ABOUT</h3>
                    <h3>We are the best interior design studio in london</h3>
                    <p>Posuere urna nec tincidunt praesent. Egestas maecenas pharetra convallis posuere. Ipsum nunc
                        aliquet
                        bibendum enim. Sem integer vitae justo eget magna fermentum iaculis 
            </div>


            <div class="content">
                <div class="img1">
                    <img src="img/img-content/IMG1.png" alt="#">
                </div>
                <div class="img2">
                     <img src="img/img-content/IMG2.png" alt="#">
                </div>
                <div class="img3">
                     <img src="img/img-content/IMG3.png" alt="#">
                </div>
                <div class="about1">
                    <h1>2K+</h1>
                    <h5>PROJECTS</h5>
                    <h5>DONE</h5>
                </div>
                <div class="about2">
                    <h1>20+</h1>
                    <h5>PRO</h5>
                    <h5>TEAMS</h5>
                </div>
                <div class="about3">
                    <h1>300+</h1>
                    <h5>GLOBAL</h5>
                    <h5>CLIENTS</h5>
                </div>
                <div class="button2">
                    <input type="button" value="LEARN ABOUT">
                </div>
            </div>





            <div class="flex-container">
                <div class="">
                    <img src="img/Ellipse 2.png" alt="">
                </div>
                <div class="">
                    <h3>Blending creativity and functionality in every design</h3>
                    <input type="button" value="HIRE US NOW">
                </div>
            </div>








            <div class="main-about">
                <div class="header-container">
                    <div class="name">
                        <h3>01.Interior design</h3>
                    </div>
                    <div class="about_name">
                        <p>Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc
                            aliquet
                            bibendum enim consectetur adipiscing.
                        </p>
                        <pre>
                                <p><a href="#">LEARN MORE ></a></p>
                            </pre>
                    </div>
                </div>
                <div class="header-container">
                    <div class="name">
                        <h3>02. Furniture design</h3>
                    </div>
                    <div class="about_name">
                        <p>Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc
                            aliquet
                            bibendum enim consectetur adipiscing.
                        </p>
                        <pre>
                                <p><a href="#">LEARN MORE ></a></p>
                            </pre>
                    </div>
                </div>
                <div class="header-container">
                    <div class="name">
                        <h3>03. Landscape design</h3>
                    </div>
                    <div class="about_name">
                        <p>Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc
                            aliquet
                            bibendum enim consectetur adipiscing.
                        </p>
                        <pre>
                                <p><a href="#">LEARN MORE ></a>  </p>
                            </pre>
                    </div>
                </div>
            </div>


            <!-- //Картинки -->
            <div class="container-img">
                <div class="item img-1"></div>
                <div class="item img-2"></div>
                <div class="item img-3"></div>
                <div class="item img-4"></div>
            </div>
          
            <!-- Блог -->
            
            <div class="main-container-blog">
                  <div class="header_blog">
                        <h2>BLOG</h2>
                        <h2>The latest article</h2>
                    </div>
                <div class="container-blog">
                    <div class="blog_1 font ">
                        <img src="img/img-blog/1.png" alt="#">
                        <p>Posuere urna nec tincidunt praesent egestas maecenas.</p>
                        <pre>
                                <p><a href="#">LEARN MORE ></a> </p>
                            </pre>
                    </div>
                    <div class="blog_2 font ">
                        <img src="img/img-blog/2.png " alt="#">
                        <p>Posuere urna nec tincidunt praesent egestas maecenas.</p>
                        <pre>
                                <p><a href="#">LEARN MORE ></a> </p>
                            </pre>
                    </div>
                    <div class="blog_3 font ">
                        <img src="img/img-blog/3.png" alt="#">
                        <p>Posuere urna nec tincidunt praesent egestas maecenas.</p>
                        </p>
                        <pre>
                                <p><a href="#">LEARN MORE ></a> </p>
                            </pre>
                    </div>
                </div>
            </div>



            <!-- container-Newsletter -->
            <div class="container-Newsletter">
                <div class="Newsletter">
                    Newsletter
                </div>
                <div class="email">
                    <label for="email"></label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" size="100px">
                </div>
                <div class="button-2">
                    <label for="button"></label>
                   <a href="#"><input type="submit" value="SUBSCRIBE" class="button "></a>
                </div>
            </div>


            
            <!-- footer -->
            <div class="container-footer">
                <div class="info">
                    <ul class="flex-list">
                        <li><a href="#">home</a></li>
                        <li><a href="#">about</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">team</a></li>
                        <li><a href="#">blog</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>

                <div class="Iteria">
                    INTERIA
                </div>
                <div class="icon">
                    <img src="img/img-footer/Facebook.png" alt="#">
                    <img src="img/img-footer/instagram.png" alt="#">
                    <img src="img/img-footer/linkedin-in.png" alt="#">
                    <img src="img/img-footer/twitter.png" alt="#">
                </div>
                <div class="paragr">
                    Posuere urna nec tincidunt praesent egestas maecenas pharetra convallis posuere ipsum nunc.

                </div>
            </div>

            <!-- Copyright -->

            <div class="copyright-container">
                <div class="one">
                    © Copyright by AltDesain-Studio – All right reserved.
                </div>
                <div class="too">
                    <span>TERMS PRIVACY</span>
             
                </div>
              
            </div>
        </div>


</body>

</html>