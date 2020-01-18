<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

//username
$pattern1 = "/(?=^[a-z])(?=^[a-z0-9_]+$)(?=^[a-z0-9_]{5,12}$)/";
$username = "re_hu7438yhtr";
if(preg_match($pattern1, $username)){
    echo "username true | ";
} else{
    echo "username false | ";
}


//password
$pattern = "/(?=.*[#$%^&*@()~`+=\-\[\]\';,.\/{}|\":<>?~\\\\]{1,})(?=.*[0-9]{1,})(?=.*[A-Z]{5,})/";
$password = "PAFSS3@";
if(preg_match($pattern, $password)){
    echo "Password true";
} else{
    echo "Password false";
}
?>                            		
