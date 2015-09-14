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
    function getAccount($username, $password)
    {
        return $this->db->query("SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'")->row_array();
    }
    function check_city($city, $address)
    {
        $this->db->where('city', $city);
        $this->db->where('address', $address);
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
        return $this->db->query("SELECT a.tourist, a.address, a.contact, a.information, b.city
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
  }
