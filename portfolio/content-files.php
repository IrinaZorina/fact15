<?php require_once "inc/header.php" ?>


<div class="content">
    <div class="container">
        <h1 class="slogan">Домашняя работа по теме РАБОТА С ФАЙЛАМИ</h1>

        <h2>Слайд №12</h2>

        <h3>1 и 2.Создайте папку 'test'. Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'.</h3>
        <?php
            $dirPath = __DIR__."/test";
            if(!file_exists($dirPath)){
                echo (mkdir($dirPath))? "Папка test создана <br>":"не удалось создать папку test <br>";

            } else echo "Папка test уже существует!!! <br>";   

            $str = "Hello, world! I'm Name";
            $fileName = $dirPath."/hello.txt";
            if(!file_exists($fileName)) {
                file_put_contents($fileName,$str);
                echo "файл hello.txt создан <br>";   
            }else echo "файл hello.txt уже существует!!! <br>";   

        ?>

        <h3>3.Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.</h3>
        <?php

            $strTwo = "Олег Крайний KrainiyOleg1983@gmail.com";
            $fileNameTwo = $dirPath."/userOne.txt";
            if(!file_exists($fileNameTwo)) {
                file_put_contents($fileNameTwo,$strTwo);
                echo "текстовый документ userOne.txt создан <br>";   
            }else echo "файл userOne.txt уже существует!!! <br>";   

            $strFromFile = file_get_contents($fileNameTwo);
            $arr = explode(" ",$strFromFile);
            echo "$arr[0] $arr[1] <br>";
        ?>

        <h3>4.Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.</h3>
        <?php
            function newSentenceToArray($fileName,&$arr){
                $strOne = file_get_contents($fileName);
                $arrOne = explode(". ",$strOne);

                foreach($arrOne as $value){
                    $value = ($value[-1]==".")?substr($value,0,strlen($value)-1):$value; //убираю точку в последнем предложении если есть
                    if((array_search($value,$arr)===false)){
                        $arr[] = $value;
                    }
                }
            };

            if( (isset($_FILES["fileOne"])) && (isset($_FILES["fileTwo"])) ){
                $arrThree = array();
                newSentenceToArray($_FILES["fileOne"]["tmp_name"],$arrThree);//"test/One.txt"
                newSentenceToArray($_FILES["fileTwo"]["tmp_name"],$arrThree);//"test/Two.txt"
                $textThree = implode(". ",$arrThree);
                $textThree = $textThree.".";
                file_put_contents("test/Three.txt",$textThree);
                echo "Файл содержит след. предложения : ".$textThree;
            }    
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <p><input type="hidden" name="Max_File_Size" value="1500000">
            Загрузите первый файл : <input type="file" name="fileOne"></p>
            <p>Загрузите второй файл : <input type="file" name="fileTwo"></p>
            <input type="submit" name="load" value="Загрузить">
        </form>



        <h3>5.Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.</h3>
        <?php
            function repeatingSentenceToArray($fileNameOne,$fileNameTwo,&$arr){
                $strOne = file_get_contents($fileNameOne);
                $strOne = ($strOne[-1]==".")?substr($strOne,0,strlen($strOne)-1):$strOne; //убираю точку в конце если есть
                $arrOne = explode(". ",$strOne);

                $strTwo = file_get_contents($fileNameTwo);
                $strTwo = ($strTwo[-1]==".")?substr($strTwo,0,strlen($strTwo)-1):$strTwo; //убираю точку в конце если есть
                $arrTwo = explode(". ",$strTwo);
                foreach($arrOne as $value){
                    if(!(array_search($value,$arrTwo)===false)){
                        $arr[] = $value;
                    }
                }
            };
            
            if( (isset($_FILES["fileOneForFifthTask"])) && (isset($_FILES["fileTwoForFifthTask"])) ){
                $arrThree = array();
                repeatingSentenceToArray($_FILES["fileOneForFifthTask"]["tmp_name"],$_FILES["fileTwoForFifthTask"]["tmp_name"],$arrThree);
                $textThree = implode(". ",$arrThree);
                $textThree = $textThree.".";
                file_put_contents("test/ThreeForFifthTask.txt",$textThree);
                echo "Файл содержит след. предложения : ".$textThree;
            }    
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <p><input type="hidden" name="Max_File_Size" value="1500000">
            Загрузите первый файл : <input type="file" name="fileOneForFifthTask"></p>
            <p>Загрузите второй файл : <input type="file" name="fileTwoForFifthTask"></p>
            <input type="submit" name="load" value="Загрузить">
        </form>



    </div>
</div>


<?php require_once "inc/footer.php" ?>