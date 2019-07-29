<?php

/* Упростить код.
function drawRating($vote) {

    if ($vote >= 0 && $vote <= 20) {
        return '★☆☆☆☆';
    }
    else if ($vote > 20 && $vote <= 40) {
        return '★★☆☆☆';
    }
    else if ($vote > 40 && $vote <= 60) {
        return '★★★☆☆';
    }
    else if ($vote > 60 && $vote <= 80) {
        return '★★★★☆';
    }
    else if ($vote > 80 && $vote <= 100) {
        return '★★★★★';
    }}
$vote=mt_rand(0, 100);
print_r(drawRating($vote));*/
$vote = mt_rand(0, 100);


function newDrawRating($vote)
{
    $star = '★';
    $openStar = '☆';
    for ($i = 0; $i < ceil($vote / 20); $i++) {
        echo $star;
    }
    for ($j = 5; $j > ceil($vote / 20); $j--) {
        echo $openStar;
    }
}
newDrawRating($vote);

