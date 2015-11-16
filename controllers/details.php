<?php

class details extends controller {

    function __construct() {
        
        parent::__construct();
        
        
        Auth::HandleLogin();
        
        
        require "libs/mark/michelf/markdown.inc.php";

        $this->view->js = array('details/js/jquery-1.11.3.min.js', 'details/js/default.js', 'details/js/jquery.fancybox-1.3.4.pack.js', 'details/js/jquery.validate.min.js', 'details/js/jquery.markitup.js', 'details/js/sets/markdown/set.js', 'details/js/pit.js');
        //$this->view->js = array('details/js/jquery-1.11.3.min.js');

        
        $this->view->css_custom = array('details/css/skins/simple/style.css', 'details/js/sets/markdown/style.css');
        
    }

    function index() {
        
//        echo 'inside index index';
        $this->view->titl = 'Job details page';

        $this->view->canon = 'details';

        //$this->view->render('error/index');
        $this->view->render('details/index');
        
        
    }

    public function edit($id) {
        
        session::set('postId', $id);

        
        $this->view->titl = 'Post a new job on dotnetnow.com';
        $this->view->canon = 'details/edit' . $id;

        $this->view->post = $this->model->postSingleList($id);

        (count($this->view->post) == 0) ? $this->view->render('error/index') : $this->view->render('details/edit', TRUE);
        

    }

    public function preview() {


        $this->sendpic();

        $this->addStepTwo();

        header('location: ' . URL . 'details/view/' . $_SESSION['postId']);
    }

    public function addStepTwo() {
        $data = array();

        $data['postid'] = $_SESSION['postId'];
        $data['title'] = $_POST['headline'];
        $data['url'] = $_POST['url'];
        $data['company'] = $_POST['company_name'];
        $data['jobdescription'] = $_POST['description'];
        $data['apply'] = $_POST['apply'];
        $data['type_of_position'] = $_POST['length_of_employment'];
        $data['work_hour'] = $_POST['hours'];

        $this->model->addStepTwo($data);
    }

    public function sendpic() {
        //if (empty($file['tmp_name'])) return false;
                
        function reArrayFiles(&$file_post) {

            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);

            for ($i = 0; $i < $file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }

            return $file_ary;
        }

        function generate_name() {
            $number = '12';
            $arr = array('a', 'b', 'c', 'd', 'e', 'f',
                'g', 'h', 'i', 'j', 'k', 'l',
                'm', 'n', 'o', 'p', 'r', 's',
                't', 'u', 'v', 'x', 'y', 'z',
                'A', 'B', 'C', 'D', 'E', 'F',
                'G', 'H', 'I', 'J', 'K', 'L',
                'M', 'N', 'O', 'P', 'R', 'S',
                'T', 'U', 'V', 'X', 'Y', 'Z',
                '1', '2', '3', '4', '5', '6',
                '7', '8', '9', '0');
            // Генерируем пароль
            $pass = "";
            for ($i = 0; $i < $number; $i++) {
                // Вычисляем случайный индекс массива
                $index = rand(0, count($arr) - 1);
                $pass .= $arr[$index];
            }
            return $pass;
        }

        $file_ary = reArrayFiles($_FILES['userfile']);

        foreach ($file_ary as $file) {

            $imageinfo = getimagesize($file['tmp_name']);
            $file['name'] = generate_name() . '.jpg';



            //print_r($file['tmp_name']);
            //print_r($imageinfo);
            //die;
            if ($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
                echo "Sorry, we only accept GIF and JPEG images\n";
                exit;
            }

            $uploaddir = 'uploads/';
            $uploadfile = $uploaddir . basename($file['name']);

            if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
                echo "File is valid, and was successfully uploaded.\n";
            } else {
                echo "File uploading failed.\n";
            }

            $data = array();
            $data['userId'] = session::get('userId');
            $data['path'] = URL . $uploadfile;
            $data['postid'] = session::get('postId');
            
            



            $this->model->addpic($data);
        }
    }

    public function view($id) {
        
        $this->view->postPreview = $this->model->postSingleBoat($id);
        
        //print_r($this->view->postPreview);
        //die;
        if (count($this->view->postPreview) > 0)
            $this->view->titl = $this->view->postPreview[0]['title'];
        (count($this->view->postPreview) == 0) ? header('location:' . URL . 'error') : $this->view->render('details/view', TRUE);
    }
    
    public function getPicList() {
          $this->model->getPicList($_SESSION['postId']);
    }
    

    public function insertPicList() {
        
    }

}
