<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
$array1 = array('*','=','=','=','*');
$array2 = array('*','=','=','=','*');
$array3 = array('*','*','*','*','*');
$array4 = array('*','=','=','=','*');
$array5 = array('*','=','=','=','*');

$kali = 19;
if($kali&1){
  
$ulang = str_repeat(" ", $kali);
echo implode($ulang, $array1);
echo "\n";
echo implode($ulang, $array2);
echo "\n";
echo implode($ulang, $array3);
echo "\n";
echo implode($ulang, $array4);
echo "\n";
echo implode($ulang, $array5);
}else{
    echo "angka harus ganjil";
    
}