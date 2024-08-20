<?php

// #27 DNA to RNA Conversion

// Deoxyribonucleic acid, DNA is the primary information storage molecule in biological systems. 
// It is composed of four nucleic acid bases Guanine ('G'), Cytosine ('C'), Adenine ('A'), and Thymine ('T').
// Ribonucleic acid, RNA, is the primary messenger molecule in cells. RNA differs slightly from DNA its chemical structure and contains no Thymine. 
// In RNA Thymine is replaced by another nucleic acid Uracil ('U').
// Create a function which translates a given DNA string into RNA.


function dnaToRna($str)
{
    // your code here
    return str_replace('T', 'U', $str);
    // str_replace('準備要更換的','要替換的',該變數(字串string))
}

$str = 'GAUUCCACCGACUUCCCAAGUACCGGAAGCGCGACCAACUCGCACAGC';
echo dnaToRna($str);
