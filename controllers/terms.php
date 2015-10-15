<?php

class terms extends controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'DotNetNow usage terms page';
        $this->view->description = 'DotNetNow usage terms page lists the terms of usage of the site';
        $this->view->canon = 'terms';
    }

    function index() {
//        echo 'inside index index';

        $this->view->render('terms/index', TRUE);
    }

    
}
