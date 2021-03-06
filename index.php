<?php

session_start();

if ( $_SERVER['REQUEST_URI'] == '/' ) $page = 'home';
else{
    $page = substr($_SERVER['REQUEST_URI'], 1);
    if ( !preg_match('/^[A-z0-9]{3,15}$/', $page ) ) not_found();
};

if( file_exists('all/'.$page.'.php') ) include 'all/'.$page.'.php';
else if( file_exists($page.'.php') ) include $page.'.php';
else if( file_exists('inc/'.$page.'.php') ) include 'inc/'.$page.'.php';
else if( file_exists('auth/'.$page.'.php') ) include 'auth/'.$page.'.php';
else if( file_exists('guest/'.$page.'.php') ) include 'guest/'.$page.'.php';
else not_found();



function not_found()
{
    exit('Not found page');
}

function head($title){
    global $page;
    include 'html/head.php';
}

function footer(){
    include 'html/footer.php';
}
