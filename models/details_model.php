<?php

class details_model extends model {

    function __construct() {
        

        parent::__construct();
    }

    public function postSingleList($id) {
        return $this->db->select('SELECT * FROM boat_post_new WHERE postid = :postid and userid= :userid', array(':postid' => $id,
                                                                                                        ':userid' => $_SESSION['userId']    ));
        //$sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id= :id');
        //$sth->execute(array(':id' => $id));
        //return $sth->fetch();
    }

    public function postSingleBoat($id) {
        
        return $this->db->select('SELECT * FROM boat_post_new as t, boat_img as t1 WHERE t.postid = :postid and t.userid= :userid and t.postid=t1.postid', array(':postid' => $id,
                                                                                                        ':userid' => $_SESSION['userId']    ));
    }

    public function addStepTwo($data) {

        $postData = array(
            'title' => $data['title'],
            'url' => $data['url'],
            'company' => $data['company'],
            'jobdescription' => $data['jobdescription'],
            'apply' => $data['apply'],
            'type_of_position' => $data['type_of_position'],
            'work_hour' => $data['work_hour']
            //'published'  => $data['published']
        );

        $this->db->update('boat_post', $postData, "`postid` = {$data['postid']}");
    }
    
    public function addpic($data) {
         $this->db->insert('boat_img', array(
            'userid' => $data['userId'],
            'postid' => $data['postid'],
            'path' => $data['path'],
            'name'  => $data['name']
        ));
    }    
        
    public function getPicList($id){
     echo (json_encode($this->db->select('SELECT * FROM boat_post as t, boat_img as t1 WHERE t.postid = :postid and t.userid= :userid and t.postid=t1.postid', array(':postid' => $id,':userid' => $_SESSION['userId']))));
     // return print_r($this->db->select('SELECT * FROM boat_post as t, boat_img as t1 WHERE t.postid = :postid and t.userid= :userid and t.postid=t1.postid', array(':postid' => $id,':userid' => $_SESSION['userId'])));
    }
     public function DelPic($id){
        //$id = (int) $_POST['id'];
         
        $this->db->delete('boat_img',"id = '$id'");
        echo json_encode(1);
        // return print_r($this->db->select('SELECT * FROM boat_post as t, boat_img as t1 WHERE t.postid = :postid and t.userid= :userid and t.postid=t1.postid', array(':postid' => $id,':userid' => $_SESSION['userId'])));
    }
      
        
        
        
    
}
