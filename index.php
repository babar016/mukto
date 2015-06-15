<?php
    echo 'hudao';
    $kitty = '';
    if(isset ($_GET['greetings'])){
        $kitty = $_GET['greetings'];
        if(strpos($kitty,"Hello!") >=0 || strpos($kitty,"Hello!") >=0 || strpos($kitty,"Hi!") || >=0 strpos($kitty,"Good morning!") >=0

              || strpos($kitty,"Good evening!") >=0 || strpos($kitty,"Good night!") >=0 ){
            $a = array('answer'=>'Hello, Kitty! Nice to see you');
            echo json_encode($a);
        }
    }
?>
