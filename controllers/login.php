<?php
class login extends controller{

    function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        $this->view->render('login/index', TRUE);        
        $this->view->canon = 'login';
        $this->view->description='DotNetNow .NET jobs Board User Login';
        $this->view->titl='DotNetNow .NET jobs Board User Login';
    }
    
    function run(){
        $this->model->run();
        $this->view->notice = 'Login succses!';
    }
    
}