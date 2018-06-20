<?php
class Login_model extends CI_model {

    public function rowwise($user,$pass)
    {
    //$this->db->select(' col2, col3');
    $this->db->where('col1', $user);
    $this->db->where('col2', $pass);
    $query = $this->db->get('login');
    return $query->result_array();
    }

    public function inputdata($data)
    {
       // $this->db->query('SELECT * FROM sample');
       $this->db->insert('login', $data);
       
    }

    public function specific($val)
    {
    $this->db->select(' col2');
    $this->db->where('col1', $val);
    $query = $this->db->get('login');
    return $query->result_array();
    }

    public function updatedata($data,$id)
    {
        $this->db->where('col1', $id);
        $this->db->update('login', $data);
   // $this->db->update('login', $data, "col1 = $id");
    }


}

       