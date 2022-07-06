<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пробный проект по PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/mysite/img/2.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 7;                                    
                        $b = 8;
                        $c = $a * $b;
                        echo 'Операция умножения ', $a, ' и ', $b, ' равна = ', $c;
                     ?>
                        <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">

                    <strong>У неё всё своё <br>
<br>
У неё всё своё — и бельё, и жильё, <br>
Ну, а я ангажирую угол у тёти. <br>
Для неё — всё свободное время моё, <br>
На неё я гляжу из окна, что напротив. <br>
<br>
У неё каждый вечер не гаснет окно, <br>
И вчера мне лифтёр рассказал за полбанки: <br>
У неё два знакомых артиста кино <br>
И один популярный артист из «Таганки». <br>
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>