<?php 
	class Room extends CI_Model
	{
		
		function check_room($id)
		{
			$this->db->where('roomno', $id);
			return $this->db->get('tbl_hotel_room')->num_rows();
		}
		function insert_room($data)
		{
			$this->db->insert('tbl_hotel_room', $data);
		}
		function get_room()
		{
			$this->db->where('uid', $this->session->userdata('uid'));
			return $this->db->get('tbl_hotel_room')->result_array();
		}
		function get_room_info($id)
		{
			$this->db->where('id', $id);
			return $this->db->get('tbl_hotel_room')->row_array();
		}
	}