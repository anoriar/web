<?php
    
  class Game { 
   
    const SIZE = 4;  
    
    public static function generateSeq(){
        
        $answerSeq = ""; 
        $keys = ['0','1', '2','3','4','5','6','7','8','9'];
        $key = rand(1,9);
        if(($index = array_search($key,$keys)) !== FALSE){
             unset($keys[$index]);
        }
        $answerSeq .= $key;
        
        for($i = 0; $i < SIZE - 1; $i++){
            $key = array_rand($keys, 1);
            if(($index = array_search($key,$keys)) !== FALSE){
                 unset($keys[$index]);
            }
            $answerSeq .= $key;
        }
        
        return $answerSeq;
    }
    
    
    public static function calculate($answerSeq, $userSeq, & $bulls, & $cows){
        $bulls = 0;
        $cows = 0;
        
        for($i = 0; $i < SIZE; $i++){
            if($answerSeq[$i] == $userSeq[$i]){
                $bulls++;
            }
        
           for($j = 0; $j < SIZE; $j++){
               if($i!=$j){
                  if($answerSeq[$i] == $userSeq[$j]){
                        $cows++;
                  }
               }
           }
        }
           
        if($bulls == SIZE)
            return true;
        else
            return false;
    }
    
    public static function valid($seq){
       
        if($seq == null)
            throw new Exception ('Поле пусто');
        $size = SIZE - 1;
            
        if(!preg_match("/^[1-9]{1}[0-9]{".$size."}$/", $seq))
            throw new Exception ('Введено не четырехзначное число');
            
        for($i = 0; $i < SIZE; $i++){
            for($j = $i + 1; $j < SIZE; $j++){
                if($seq[$i] == $seq[$j])
                    throw new Exception ('Цифры не должны повторяться');
            }
        }
    }
} 

?>