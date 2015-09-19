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
		function insert_room_gal($data)
		{
			$this->db->insert('tbl_room_gallery', $data);
		}
		function get_room_gal($uid, $roomid)
		{
			$this->db->where('uid', $uid);
			$this->db->where('roomid', $roomid);
			return $this->db->get('tbl_room_gallery')->result_array();
		}
		function del_room_gal($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('tbl_room_gallery');
		}
		function update_room($data, $id)
		{
			$this->db->where('id', $id);
			$this->db->update('tbl_hotel_room', $data);

		}
	}