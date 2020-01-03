<?php
$name = $_POST['name'];
$text = $_POST['text'];
if(($name != '') && ($text != '')){
    $strings = file('messages.txt');
    if(count($strings)>100){
        $textarr=file('messages.txt');
        $arr=array_slice($textarr, -5); 
        $f = fopen('messages.txt', 'w+');
        foreach($arr as $ar){
            $f = fopen('messages.txt', 'a+');
            fwrite($f, $ar);
            fclose($f);
        }
    }
    $f = fopen('messages.txt', 'a+');
    fwrite($f, date('Y-m-d H:i:s') . "___");
    fwrite($f, $name . "___");
    fwrite($f, $text . "\n");
    fclose($f);
}
?>
