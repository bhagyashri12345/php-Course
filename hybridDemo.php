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
    class solutions extends test{
        function examples(){
            $que = $this->question;
             echo "class example:".$que;
        }
    }
    class student implements solution,solutions{
        
    }
    $obj = new solution();
    $obj->ex();
    $obj->example();  
?>