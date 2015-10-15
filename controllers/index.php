<?php
class index extends controller{

    function __construct() {
        parent::__construct();
        
        
        
    }
    
    function index(){
//        echo 'inside index index';
        $this->view->titl='DotNetNow: .NET Jobs | Best Vacancy on .NET Now Job Board ';
        $this->view->description='Find .NET developers. Post .NET jobs into the inboxes of active Web developers today. DotNetNow: the trusted .NET Jobs board since 2010.';
        $this->view->alllist= $this->model->postList();      
        
        $this->view->render('index/index');        
        
    }    
    
    function details(){
        $this->view->render('index/index');        
    }
    
}