<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Первая верстка</title>
    <?php
        $time = date("H");
        if ($time > 8 && $time < 20) {
            $img="Lightstyles.css";
            } else {
            $img="styles.css";
        }
    ?>
    <link rel="stylesheet" href="css/<?php echo $img ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Nunito&display=swap" rel="stylesheet">   
</head>
<body>
    <div class = "back">
        <div class="header-container">
            <div class="container">
                <div class="header">
                    <div class="header_logo">INTERIA</div>
                    <div class="header_menu">
                        <div>home</div>
                        <div>pages</div>
                        <div>services</div>
                        <div>team</div>
                        <div>blog</div>
                    </div>
                    <div class="header_button">
                        <a href="#" style="text-decoration: none; color:rgb(255, 255, 255);">GET STARTED</a>
                    </div>
                </div>    
            </div>
        </div> 

        <div class="SectionOne">
            <div class="container">
                <p class="SectionOne_TextOne">ABOUT</p>
                <p class="SectionOne_TextTwo">We are the best interior design studio in london</p>
                <p class="SectionOne_TextThree">Posuere urna nec tincidunt praesent. Egestas maecenas pharetra <br> convallis posuere. Ipsum nunc aliquet bibendum enim. Sem integer <br> vitae justo eget magna fermentum iaculis eu non.</p>
            </div>
        </div>

        <div class="sectionTwo">
            <div class="container">
                <div class="sectionTwo_GridContainer">
                    <div class="SectionTwo_ImageOne">
                        <img src="Image/ImgOneForSectionTwo.png" alt="">
                    </div>
                    <div class="SectionTwo_ImageTwo">
                        <img src="Image/ImgTwoForSectionTwo.png" alt="">
                    </div>
                    <div class="SectionTwo_ImageThree">
                        <img src="Image/ImgThreeForSectionTwo.png" alt="">
                    </div>
                    <div class="SectionTwo_ButtonArea">
                        <div class="vvv">
                            <a href="#" class="SectionTwo_Button" >LEARN ABOUT</a>
                        </div>
                    </div>
                    <div class="SectionTwo_CellsText">
                        <div class="CellsText_GroupOne">
                            <p class="CellsText_GroupOne_TextOne">2K+</p>
                            <p class="CellsText_GroupOne_TextTwo">PROJECTS<br>DONE</p>
                        </div>
                        <div class="CellsText_GroupTwo">
                            <p class="CellsText_GroupTwo_TextOne">20+</p>
                            <p class="CellsText_GroupTwo_TextTwo">PRO<br>TEAMS</p>
                        </div>
                        <div class="CellsText_GroupThree">
                            <p class="CellsText_GroupThree_TextOne">300+</p>
                            <p class="CellsText_GroupThree_TextTwo">GLOBAL<br>CLIENTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-line">
            <div class="img_box">
                <img src="Image/IMG1.png" alt="">
            </div>
            <div class="img_box">
                <img src="Image/IMG2.png" alt="">
            </div>
            <div class="img_box">
                <img src="Image/IMG3.png" alt="">
            </div>
            <div class="img_box">
                <img src="Image/IMG4.png" alt="">
            </div>
        </div>    

        <div class="container">
            <div class="blog">
                <div class="top_blog">
                    <div class="titleBlog">BLOG</div>
                    <div class="secondTitleBlog">The latest article</div>
                </div>
                <div class="boton_blog">
                    <div class="blog1">
                        <img src="../Image/Rectangle1.png" alt="">
                        <div class="text">
                            <p class="P_SectionEight">Posuere urna nec tincidunt praesent egestas <br> maecenas.</p>
                            <a href="#">LEARN MORE
                                <img src="Image/angle-right.png" alt="">
                            </a> 
                        </div>       

                    </div>
                    <div class="blog2">
                        <img src="Image/Rectangle2.png" alt="">
                        <div class="text">
                            <p class="P_SectionEight">Posuere urna nec tincidunt praesent egestas <br> maecenas.</p>
                            <a href="#">LEARN MORE
                                <img src="Image/angle-right.png" alt="">
                            </a>        
                        </div>       

                    </div>
                    <div class="blog3">
                        <img src="../Image/Rectangle3.png" alt="">
                        <div class="text">
                            <p class="P_SectionEight">Posuere urna nec tincidunt praesent egestas <br> maecenas.</p>
                            <a href="#">LEARN MORE
                                <img src="Image/angle-right.png" alt="">
                            </a>        
                        </div>       
                    </div>
                </div>
            </div>
        </div>
    




    </div>


</body>
</html>