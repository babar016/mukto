<?php
    echo 'hudao';
    $kitty = '';
    if(isset ($_GET['greetings'])){
        $kitty = $_GET['greetings'];
        if(strpos($kitty,"Hello!") || strpos($kitty,"Hello!") || strpos($kitty,"Hi!") || strpos($kitty,"Good morning!")

              || strpos($kitty,"Good evening!") || strpos($kitty,"Good night!") ){
            $a = array('answer'=>'Hello, Kitty! Nice to see you');
            echo json_encode($a);
        }
    }
?>
