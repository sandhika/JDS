<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        return ( strcmp(strrev(strtolower($word)),strtolower($word))==0?true:false);
          
    }
}

echo Palindrome::isPalindrome('Civic');