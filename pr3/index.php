
<?php
    session_start();
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    define('ROOT', dirname(__FILE__));
    define('SIZE', 4);
    require_once(ROOT.'/game.php');
  
    $message = "Угадайте четырехзначное число"; 
 
    if (isset($_POST["submit"])) { 
        if (!isset($_SESSION['answer'])){
             $answer = Game::generateSeq();
             $_SESSION['answer'] = $answer;
        }
        $seq = $_POST["seq"]; 
       
        try{
            Game::valid($seq);
            if(Game::calculate( $_SESSION['answer'] , $seq, $bulls, $cows)){
                $message = "Вы выиграли! Для начала новой игры введите новое число и нажмите кнопку Отправить";
                session_destroy();
            }
            else
                $message = "Число:".$seq." Быки:".$bulls." Коровы:".$cows;
        }
        catch (Exception $e) {
            $message = 'Ошибка: '.$e->getMessage().'. Попробуйте еще раз';
        }
    } 
    
    if (isset($_POST["reset"])) { 
        session_destroy();
        $_SESSION['answer'] = Game::generateSeq();
    }

?>


<html>

    <head>
        <title>Быки и коровы</title>
        <link href="/css/style.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        <div id='header'>
            <img src='/images/bg_body.jpg'></img>
        </div>

        <div id='wrapper'>
     
            
            <form action = "#" method="post">
                <div class="elem"> <?php echo $message; ?></div>
                <input class="elem" type="text" name="seq"  /> 
                <input class="elem" type="submit" name="submit" value="Отправить"/>
                <input class="elem" type="submit" value="Рестарт" name="reset" />
            </form>
        </div>
    </body>
</html>