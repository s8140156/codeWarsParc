<?php

function dnaToRna($str)
{
    // your code here
    return str_replace('T', 'U', $str);
    // str_replace('準備要更換的','要替換的',該變數(字串string))
}

$str = 'GAUUCCACCGACUUCCCAAGUACCGGAAGCGCGACCAACUCGCACAGC';
echo dnaToRna($str);
