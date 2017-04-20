<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./font.css" />
        <link rel="stylesheet" href="./style.css" />
    <head>
    </head>
    <body>
        <pre><?php print_r($_POST) ?></pre>
        <?php
         $link = mysql_connect("localhost", "anoriar", "123");
          mysql_select_db("world");
          mysql_query("set names 'utf8';");
          $name = $_POST['name'];
          $countrycode = $_POST['countrycode'];
          $district = $_POST['district'];
          $population = $_POST['population'];
          
          check($name, $district, $countrycode, $population);
          
          if($name && $countrycode && $population && $district) {
      
            $sql = "insert into city
                    values (0,'".$name."' , '".$countrycode."', '".$district."', '".$population."')";

            if(mysql_query($sql)){
              echo "Добавлен город ".mysql_insert_id().", ".$countrycode.", ".$name.", ".$population;
            }
            else {
              echo "данные не добавлены";
               echo mysql_errno($link) . ": " . mysql_error($link) . "\n";
            
             
            }
          }
          
          
          
            function check($name, $district, $countrycode, $population)
            {
                if ($name == null)
                    die ('Введите название города');
               
                if ($countrycode == null) 
                    die ("Введите код страны"); 
                
                if ($district == null)
                  die ('Введите район');
                    
                if ($population == null)
                    die ('Введите численность населения');
                  
                return true;
            }
        ?>
    </body>
</html>