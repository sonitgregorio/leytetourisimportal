<?php 
	class Transpo extends CI_Model
	{
		
		function check_route($from, $to)
		{
			$this->db->where('frm', $from);
			$this->db->where('tos', $to);
			return $this->db->get('tbl_route')->num_rows();
		}
		function get_route()
		{
			$this->db->where('owned', $this->session->userdata('uid'));
			return $this->db->get('tbl_route')->result_array();
		}
		function insert_route($data)
		{
			$this->db->insert('tbl_route', $data);
		}
		function del_route($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('tbl_route');
		}
		function get_route_inf($id)
		{
			$this->db->where('id', $id);
			return $this->db->get('tbl_route')->row_array();
		}
	}