<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проект по PHP</title>
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
					<?php include 'hak.inc.php' ?>                                   
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
                        $a = 4;                                    
                        $b = 3;
                        $c = $a ** $b;
                        echo 'Операция возведение в степень ', $a, ' и ', $b, ' равна = ', $c;
                     ?>
                        <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">

                    <strong>Классификация таргетированных атак <br>
<br>
Целевые атаки могут быть направлены на государственные и коммерческие структуры. При взломе применяются стандартные механизмы (спам, фишинг, заражение сайтов) и наборы эксплойтов. В основном злоумышленники преследуют следующие цели:
<li>Похищение средств с банковских счетов и из электронных кошельков, воровство конфиденциальных данных. </li>
<li>Нечестная конкуренция: манипулирование процессами, подделка документов, ослабление конкурентов, вымогательство и шантаж. </li>
<li>Похищение образцов интеллектуальной собственности. </li>
<li>Нарушение нормальной деятельности объектов военной, промышленной и гражданской инфраструктуры, систем жизнеобеспечения. </li>
<li>Использование возможностей телекоммуникационных систем для осуществления информационных воздействий и манипулирования общественным мнением. </li>
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>