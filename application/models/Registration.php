<?php
  /**
   * Queries
   */
  class Registration extends CI_Model
  {

    function getAlltype()
    {
        $this->db->where('id !=', 4);
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
    function getAccount($username, $password)
    {
        return $this->db->query("SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'")->row_array();
    }
    function check_city($city)
    {
        $this->db->where('city', $city);
        return $this->db->get('tbl_city')->num_rows();
    }
    function insert_city($data)
    {
        $this->db->insert('tbl_city', $data);
    }
    function select_city()
    {
        return $this->db->get('tbl_city')->result_array();
    }
    function insert_spot($data)
    {
        $this->db->insert('tbl_touristspot', $data);
    }
    function check_spot($spot, $address)
    {
        $this->db->where('tourist', $spot);
        $this->db->where('address', $address);
        $this->db->where('owned', $this->session->userdata('uid'));
        return $this->db->get('tbl_touristspot')->num_rows();
    }
    function getPlace($dest)
    {
        $this->db->where('id', $dest);
        $this->db->select('city');
        $x = $this->db->get('tbl_city')->row_array();
        return $x['city'];
    }
    function get_spots($destination)
    {
        $this->db->where('city', $destination);
        return $this->db->get('tbl_touristspot')->result_array();
    }
    function get_tourist_data($spots)
    {
        return $this->db->query("SELECT a.tourist, a.address, b.id as cids, a.contact, a.information, b.city
                          FROM tbl_touristspot a, tbl_city b
                          WHERE a.id = '$spots' AND a.city = b.id")->row_array();
    }
    function check_hotel($hotel, $address)
    {
        $this->db->where('hotel', $hotel);
        $this->db->where('address', $address);
        return $this->db->get('tbl_hotel')->num_rows();
    }
    function insert_hotel($data)
    {
        $this->db->insert('tbl_hotel', $data);
    }
    function getHot($tour)
    {
        $this->db->where('tourist', $tour);
        return $this->db->get('tbl_hotel')->result_array();
    }
    function get_tourist_info($id)
    {
        $this->db->where('owned', $id);
        return $this->db->get('tbl_touristspot')->row_array();
    }
    function checking_t()
    {
        $this->db->where('owned', $this->session->userdata('uid'));
        return $this->db->get('tbl_touristspot')->row_array();
    }
    function update_spot($data)
    {
        $this->db->where('owned', $this->session->userdata('uid'));
        $this->db->update('tbl_touristspot', $data);
    }
    function get_spot()
    {
        $this->db->where('owned', $this->session->userdata('uid'));
        $x = $this->db->get('tbl_touristspot')->row_array();
        return $x['id'];
    }
    function insert_gallery($data)
    {
        $this->db->insert('tbl_gallery', $data);
    }
    function get_gallery()
    {
        $x = $this->get_spot();
        $this->db->where('spot', $x);
        return $this->db->get('tbl_gallery')->result_array();
    }
    function del_gal($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_gallery');
    }
    function post_announce($data)
    {
        $this->db->insert('tbl_announcement', $data);
    }
    function get_annou($stats)
    {
        return $this->db->query("SELECT a.*, b.firstname, b.lastname FROM tbl_announcement a, tbl_users b WHERE a.uid = b.id AND a.status = $stats ORDER by id desc")->result_array();
    }
    function get_info($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_users')->row_array();
    }
    function insert_prof($data)
    {
        $this->db->insert('tbl_profile', $data);
    }
    function getprof($id)
    {
        $x = $this->db->query("SELECT * FROM tbl_profile WHERE uid = '$id' ORDER by id DESC LIMIT 1")->row_array();
        return $x['filename'];
    }
    function update_setts($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_users', $data);
    }
    function update_pass($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_users', $data);
    }
    function get_galleries($id)
    {
        $this->db->where('spot', $id);
        return $this->db->get('tbl_gallery')->result_array();
    }
    function get_cities($id)
    {
        $this->db->where('id', $id);
        $this->db->select('city');
        $x = $this->db->get('tbl_touristspot')->row_array();
        return  $x['city'];
    }
    function get_transpo($cid)
    {
        $this->db->where('id', $cid);
        return $this->db->get('tbl_transpo')->result_array();
    }
    function getspots($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_touristspot')->row_array();
    }
    function get_or($id)
    {
        $this->db->where('id', $id);
    }
    function get_trans_route($id)
    {   
        return $this->db->query("SELECT * FROM tbl_transpo 
                                 WHERE tbl_transpo.owned = '$id'")->row_array();
    }
    function get_routed($id)
    {
        return $this->db->query("SELECT * FROM tbl_route 
                                 WHERE owned = '$id'")->result_array();
    }
    function logs($data)
    {
        date_default_timezone_set('Asia/Manila');
        $this->db->insert('tbl_logs', array('uid' => $this->session->userdata('uid'), 'description' => $data, 'date' => Date('Y-m-d'), 'tstamp' => Date('h:i:s')));
    }
    function get_logs()
    {
        return $this->db->query("SELECT * FROM tbl_logs, tbl_users WHERE tbl_users.id = tbl_logs.uid")->result_array();
    }
    function del_tour($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_touristspot');
    }
    function appr_ann($id)
    {
        $this->db->query("UPDATE tbl_announcement SET status = 1 WHERE id = $id");
    }
    function delete_approve($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_announcement');

    }
    function check_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('tbl_users')->num_rows();
    }
    function check_code($em, $code)
    {
        $this->db->where('email', $em);
        $this->db->where('confirmcode', $code);
        return $this->db->get('tbl_users')->num_rows();
    }
  }
