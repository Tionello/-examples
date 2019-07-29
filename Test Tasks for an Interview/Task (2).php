<p>
    Строгий начальник хочет, чтобы в сообщенях не было больше одной скобки подряд в общем чате.<br>
    Напишите функцию, которая поможет ему в этом, для любой фразы.
</p>
<?php
$text='((((dvsdvsdv(((s)))dvsdv)))';

function replaceText($text){
    $text = preg_replace('~[)]{1,}~', ')', $text);
    $str = preg_replace('~[(]{1,}~', '(', $text);
    echo $str;

}
replaceText($text);