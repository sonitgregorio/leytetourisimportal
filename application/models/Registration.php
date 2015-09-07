<?php
  /**
   * Queries
   */
  class Registration extends CI_Model
  {

    function getAlltype()
    {
        return $this->db->get('tbl_usertype')->result_array();
    }
    function existuser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tbl_users')->num_rows();
    }
    function insert_users($data)
    {
        $this->db->insert('tbl_users', $data);
    }
  }
