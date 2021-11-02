<?php
    function local(){
        $num = 45;
        echo "Local variable : ", $num;
    }
    local();
?>

<?php
    function myTest(){
        $lang = "PHP";
        echo "Web development language: ". $lang;
    }
    myTest();
    //echo $long;//error
?>