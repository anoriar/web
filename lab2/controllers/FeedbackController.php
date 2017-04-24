<?php


class FeedbackController
{

    public function actionIndex()
    {
  
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $theme = $_POST['theme'];
            $message = $_POST['message'];
    
                        
            $errors = $this -> check($name, $email, $theme, $message);
            
            
            if ($errors == false) {
                   if($name && $email && $theme && $message) {
                       	$db = Db::getConnection();
                        $sql = "insert into users
                                values (0, '".$name."' , '".$email."', '".$theme."', '".$message."')";
                        
                        if($db->query($sql)){
                          $result = true;
                        }
                        else {
                          $result = false;
                          $errors[] =  mysql_errno($link) . ": " . mysql_error($link) . "\n";
                        }
                      }
                $result = true;
            }

        }
        
        require_once(ROOT . '/views/feedback/index.php');
        
        return true;
    }
    
    function check($name, $email, $theme, $message)
    {
        $errors = false;
        if ($name == null || $email == null || $theme == null || $message == null)
            $errors[] = 'Введите незаполненные данные';
       
        if (!preg_match("/[-0-9a-z_]+@[-0-9a-z_]+\.[a-z]{2,6}/i",$email)) 
            $errors[] = "Email не соответствует шаблону"; 
          
        return $errors;
    }

}
