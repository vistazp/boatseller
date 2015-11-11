<?php
class view {

    function __construct() {
        //echo 'This is a view';
    }
    public function render($name, $noInclude=FALSE){
        if ($noInclude==TRUE){
            print_r($_SESSION);
        require 'views/headerNoSubscribe.php';
        require 'views/'.$name.'.php';
        require 'views/footer.php';
        }
        else {
            print_r($_SESSION);
        require 'views/header.php';
        require 'views/'.$name.'.php';
        require 'views/footer.php';
        }
    }

}