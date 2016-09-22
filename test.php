<?php
    class test{
       public $question = 'abc';
        function ex(){
             echo "class test<br>";
        }
    }
    class solution extends test{
        // var_dump($question);
        // public $answer = 'xyz';
          
        function example(){
            $que = $this->question;
             echo "class example:".$que;
        }
    }
    $obj = new solution();
    $obj->ex();
    $obj->example();  
?>