<?php

class user_model extends model {

    function __construct() {
        parent::__construct();
    }

    public function userList() {

        return $this->db->select('SELECT id, email, name, role FROM boat_users');
        //$sth = $this->db->prepare('SELECT id, login, role FROM users');
        //$sth->execute();
        //return $sth->fetchAll();
    }

    public function userSingleList($id) {
        return $this->db->selectOne('SELECT id, name, email, role FROM boat_users WHERE id= :id', array(':id' => $id));
        //$sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id= :id');
        //$sth->execute(array(':id' => $id));
        //return $sth->fetch();
    }

    public function create($data) {
        $this->db->insert('boat_users', array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => hash::create('md5', $data['password'], HASH_KEY),
            'role' => $data['role']
        ));
    }

    public function editSave($data) {

        $postData = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => hash::create('md5', $data['password'], HASH_KEY),
            'role' => $data['role']);

        $this->db->update('boat_users', $postData, "`id` = {$data['id']}");
 
    }

    public function delete($id) {
        $result = $this->db->select('SELECT role FROM boat_users WHERE id = :id', array(':id' => $id));
        

        
        if ($result[0]['role'] == 'owner')
            return false;
        
        $this->db->delete('boat_users', "id = '$id'");
    }

}
