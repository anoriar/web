
<?php
    if(isset($_POST["btn"])):
    
         $link = mysql_connect("localhost", "anoriar", "123");
          mysql_select_db("japan");
          mysql_query("set names 'utf8';");
          $name = $_POST['name'];
          $email = $_POST['email'];
          $theme = $_POST['theme'];
          $message = $_POST['message'];
          
         check($name, $email, $theme, $message);
          
         
          if($name && $email && $theme && $message) {
            $sql = "insert into users
                    values (0, '".$name."' , '".$email."', '".$theme."', '".$message."')";
            if(mysql_query($sql)){
              echo "Ваше сообщение добавлено ".mysql_insert_id().", ".$name.", ".$email.", ".$theme;
            }
            else {
              echo "данные не добавлены";
               echo mysql_errno($link) . ": " . mysql_error($link) . "\n";
            }
          }
        
      
    endif;
    
    function check($name, $email, $theme, $message)
    {
        if ($name == null)
            die ('Введите имя');
       
        if (!preg_match("/[-0-9a-z_]+@[-0-9a-z_]+\.[a-z]{2,6}/i",$email)) 
            die ("Ваш email не соответствует шаблону"); 
        
        if ($theme == null)
          die ('Введите тему сообщения');
            
        if ($message == null)
            die ('Введите сообщение');
          
        return true;
    }
?>