<?php

function Pipe() {
    $result = "";
    $args = func_get_args();
    foreach ($args as $arg){
        if (function_exists($arg)) {
           $result .= $arg() .' And ';
        } else {
           $arg = function() {
              return ' doing  Nothing';
           };
          $result .= $arg();
        }
    }
    return $result;
}

function cooking() {
    return 'I am cooking';
}

function washing() {
    return 'I am washing my cloth';
}

function replaceI() {
    return str_replace('', '');
}

echo Pipe('cooking', 'washing', 'functionNotExist')->Pipe('empty');
