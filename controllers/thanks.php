<?php

class thanks extends controller {

    function __construct() {
        parent::__construct();

        $this->view->titl = 'Thank You dude!';
        $this->view->canon = 'thanks';
        $this->view->description = 'DotNetNow thanks page';
    }

    function index() {
        //echo Hash::create('md5', 'prof', HASH_KEY);

        $this->view->thanksMessage = 'Thanks for your feedback :)';
        $this->view->render('thanks/index');
    }

    public function indexSubscribe() {
        $this->view->thanksMessage = 'Thanks for your subscription :)';
        $this->view->render('thanks/index');
    }

    public function success() {
        $this->view->thanksMessage = 'Your post has been paid. Thank you for posting with us.';
        $this->view->render('thanks/index');
    }

    public function callback() {

        $private_key = "NdIKOaHg7r1TulEe82hIzrmt8UqqYnuYtXUdXDnt";
        $r_data = $_POST['data'];

        $sign = base64_encode(sha1(
                        $private_key .
                        $r_data .
                        $private_key
                        , 1));

        $data = json_decode(base64_decode($_POST['data']), true);
        $postid = preg_replace('/[^0-9]/', '', $data['description']);



        if ($sign == $_POST['signature']) {

            if ($data['status'] == 'success') {
            //if ($data['status']== 'sandbox'){

                $this->model->postPaid($postid);

                //    $this->_sendNotif($postid,$data['amount']);
                $to = 'uaprof@gmail.com';
                $subject = 'Нам оплатили ура!';
                $message = 'Оплачен пост номер: ' . $postid . ' на сумму ' . $data['amount'] . ' USD!';

                $headers = "Content-type: text/plain; charset=UTF-8 \r\n";
                $headers .= "From: DOTNETNOW.COM <admin@dotnetnow.com>\r\n";


                mail($to, $subject, $message, $headers);
            }
        } else {
            
        };


//        $fp = fopen("/var/www/cdwebjo14041/data/www/dotnetnow.com/call.txt", "a"); // Открываем файл в режиме записи 
//        ftruncate($fp, 0);
//        $postid = filter_var($data['description'], FILTER_SANITIZE_NUMBER_INT);// Исходная строка
//        $postid = preg_replace('/[^0-9]/', '', $data['description']);// Исходная строка
//        $test = fwrite($fp, $postid); // Запись в файл
//        fclose($fp); //Закрытие файла
    }

//    private function _sendNotif($postid, $money) {
//        $to = 'uaprof@gmail.com';
//        $subject = 'Нам оплатили ура!';
//        $message = 'Оплачен пост номер: ' . $postid . ' на сумму ' . $money . ' USD!';

//        $headers = 'MIME-Version: 1.0' . "\r\n";
//        $headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";


//        mail($to, $subject, $message, $headers);
//    }

}
