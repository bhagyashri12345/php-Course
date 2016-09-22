<?php
    interface par{
        function demo();
    }
    interface test{
       // public $question = 'abc';
       public function ex();
    }
    interface solution extends par{
        // var_dump($question);
        // public $answer = 'xyz';
        // function demo();  
        function example();
    }
    
    class student implements test,solution{
        function ex(){
             echo "class test<br>";
        }
        function example(){
            $que = $this->question;
             echo "class example<br>".$que;
        }
        function demo(){
            echo "class demo ";
        }
    }
    $obj = new student();
    $obj->ex();
    $obj->example();
    $obj->demo();  
?>