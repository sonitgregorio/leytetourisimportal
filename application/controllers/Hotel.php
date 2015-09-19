<?php 
	class Hotel extends CI_Controller
	{
		function faildemessage()
	    {
	        return '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
	    }
	    function successMessage()
	    {
	        return'<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
	    }
		function manage_rooms()
		{
			$this->load->model('room');
			$data['param'] = "manage_rooms";
        	$this->load->view("templates/header");
        	$this->load->view('templates/hotelnav', $data);
        	$this->load->view("hotel/manage_room");
        	$this->load->view("templates/footer");
		}
		function insert_room()
		{
			$this->load->model('room');
			$config['upload_path']          = './assets/images/rooms/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['encrypt_name']         = TRUE;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('picture'))
	        {
	            $this->session->set_flashdata('message', $this->faildemessage() . $this->upload->display_errors().'</div>');
	        }
	        else
	        {
	            $checkexist = $this->room->check_room($this->input->post('roomno'));
	            if ($checkexist <= 0)
	            {
	            	$data = array('roomno'	=> $this->input->post('roomno'),
						  'description' 	=> $this->input->post('descr'),
						  'rate' 			=> $this->input->post('rate'),
						  'uid' 			=> $this->session->userdata('uid'),
						  'filename' 		=>  $this->upload->data('file_name'));
	                $this->room->insert_room($data);
	                $this->session->set_flashdata('message', $this->successMessage() . 'Room Added.</div>');
	            }
	            else
	            {
	                $this->session->set_flashdata('message', $this->faildemessage() . 'Room Number Already Exist.</div>');
	            }

	        }
	        redirect('/manage_rooms');
		}
		function view_room($id)
		{
			$this->load->model('room');
			$data['param'] = "manage_rooms";
			$pa['id'] = $id;
        	$this->load->view("templates/header");
        	$this->load->view('templates/hotelnav', $data);
        	$this->load->view("hotel/view_room", $pa);
        	$this->load->view("templates/footer");
		}
		function upload_image_room()
		{
			$this->load->model('room');
			$config['upload_path']          = './assets/images/roomsgal/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['encrypt_name']         = TRUE;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('pictures'))
	        {
	            $this->session->set_flashdata('messages', $this->faildemessage() . $this->upload->display_errors().'</div>');
	        }
	        else
	        {
	            	$data = array('roomid'			=> $this->input->post('roomid'),
								  'description' 	=> $this->input->post('descr'),
								  'uid' 			=> $this->session->userdata('uid'),
								  'filename' 		=>  $this->upload->data('file_name'));
	                $this->room->insert_room_gal($data);
	                $this->session->set_flashdata('messages', $this->successMessage() . 'Successfuly Uploaded.</div>');
	    	}       
	            redirect('/view_room/'.$this->input->post('roomid'));
		}
		function del_room_gal($id, $roomid)
		{
			$this->load->model('room');
			$this->room->del_room_gal($id);
			redirect('/view_room/' . $roomid);
		}
		function update_room()
		{
			$this->load->model('room');
			$config['upload_path']          = './assets/images/rooms/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['encrypt_name']         = TRUE;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('picture'))
	        {
	        	$data = array('roomno'	=> $this->input->post('roomno'),
							  'description' 	=> $this->input->post('descr'),
							  'rate' 			=> $this->input->post('rate'),
							  'uid' 			=> $this->session->userdata('uid'));
                $this->room->update_room($data, $this->input->post('roomid'));
	        }
	        else
	        {
            	$data = array('roomno'	=> $this->input->post('roomno'),
							  'description' 	=> $this->input->post('descr'),
							  'rate' 			=> $this->input->post('rate'),
							  'uid' 			=> $this->session->userdata('uid'),
							  'filename' 		=>  $this->upload->data('file_name'));
                $this->room->update_room($data, $this->input->post('roomid'));
	        }
	          $this->session->set_flashdata('message', $this->successMessage() . 'Room Updated.</div>');
			  redirect('/view_room/'.$this->input->post('roomid'));
		}
	}