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
		function hotel_settings()
		{
			$this->load->model('room');
			$data['param'] = "hotel_settings";
			$pa['id'] = $this->session->userdata('uid');
        	$this->load->view("templates/header");
        	$this->load->view('templates/hotelnav', $data);
        	$this->load->view("hotel/hotel_settings", $pa);
        	$this->load->view("templates/footer");
		}
		function insert_hotels()
		{
			$this->load->model('room');
			$hotel = $this->input->post('hotel');
	        $contact = $this->input->post('contact');
	        $pic = $this->input->post('picture');
	        $address = $this->input->post('address');
	        $city = $this->input->post('city');
	        $desc = $this->input->post('description');

	        $config['upload_path']          = './assets/images/hotels/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['encrypt_name']         = TRUE;
	        $this->load->library('upload' , $config);
	        if ( ! $this->upload->do_upload('picture'))
	        {
	          //  $this->session->set_flashdata('message', $this->faildemessage() . $this->upload->display_errors().'</div>');

	              if ($this->room->checking_t() > 0)
	              {
	                $data = array('hotel' => $hotel, 'contact' => $contact, 'address' => $address,
	                'tourist' => $city, 'information' => $desc);
	                $this->room->update_hotel($data);
	                $this->session->set_flashdata('message', $this->successMessage() . 'Updated.</div>');
	              }
	              else
	              {

	              }
	        }
	        else
	        {
	            $checkexist = $this->room->check_hotel($hotel, $address);
	            if ($checkexist <= 0)
	            {
	                $data = array('hotel' => $hotel, 'contact' => $contact, 'address' => $address,
	                'tourist' => $city, 'information' => $desc, 'filename' =>  $this->upload->data('file_name'),
	                 'owned' => $this->session->userdata('uid'));
	                $this->room->insert_hotel($data);
	                $this->session->set_flashdata('message', $this->successMessage() . 'Save!!.</div>');
	            }
	            else
	            {
	              $data = array('hotel' => $hotel, 'contact' => $contact, 'address' => $address,
	              'tourist' => $city, 'information' => $desc, 'filename' =>  $this->upload->data('file_name'));
	               $this->room->update_hotel($data);
	               $this->session->set_flashdata('message', $this->successMessage() . 'Updated.</div>');
	                //$this->session->set_flashdata('message', $this->faildemessage() . 'Tourist Spot Already Exist.</div>');
	            }
	        }
	        redirect('/hotel_settings');
		}
		function ins_reservs()
		{
			$this->load->helper('string');
			$trans = strtoupper(random_string('alnum', 6));
			$this->load->model('room');
			$data2 = array('hid' => $this->input->post('hid'),
						  		  'fullname' => $this->input->post('fullname'),
						  		  'emailaddress' => $this->input->post('emailaddress'),
						  		  'contact' => $this->input->post('contact'),
						  		  'datereserve' => $this->input->post('datereserve'),
						  		  'check_out' => $this->input->post('check_out'),
						  		  'no_days' => $this->input->post('no_days').
						  		  'transcode' => $trans);
			// $data2['hid'] = $this->input->post('hid');
			// $data2['datereserve'] = $this->input->post('')
			
			$date_in = $this->input->post('datereserve');
			$date_out = $this->input->post('check_out');

			if ($date_in > $date_out) 
			{
				$this->session->set_flashdata('messages', $this->faildemessage() . 'Invalid Date Specified</strong></div>');
			}
			else
			{	
				$x = $this->room->checking_availability($this->input->post('datereserve'), $this->input->post('hid'), 'Pending');
				if ($x > 0) 
				{
					$this->session->set_flashdata('messages', $this->faildemessage() . '<strong>This room is not available during this date' . $this->input->post('datereserve') . '</strong></div>');
				}
				else
				{
					$data = array('hid' => $this->input->post('hid'),
						  		  'fullname' => $this->input->post('fullname'),
						  		  'emailaddress' => $this->input->post('emailaddress'),
						  		  'contact' => $this->input->post('contact'),
						  		  'datereserve' => $this->input->post('datereserve'),
						  		  'check_out' => $this->input->post('check_out'),
						  		  'no_days' => $this->input->post('no_days'),
						  		  'stats' => 'Pending',
						  		  'transcode' => $trans);
					$this->session->set_flashdata('messages', $this->successMessage() . '<strong>Reservation Request Send. Please Check Your Email Address Spam Folder</strong></div>');
				   	$this->room->insert_r($data);
				   	unset($data2['fullname']);
				}
			}
			
		    $this->load->view('hotel/reservation', $data2);
		    $this->load->view('templates/script.php');
		}
		function reservation_list()
		{
			$this->load->model('room');
			$data['param'] = "reservation_list";
			$pa['id'] = $this->session->userdata('uid');
        	$this->load->view("templates/header");
        	$this->load->view('templates/hotelnav', $data);
        	$this->load->view("hotel/reservation_list", $pa);
        	$this->load->view("templates/footer");
		}
		function view_requests($id)
		{
			$this->load->model('room');
			$data['param'] = "reservation_list";
			$pa['id'] = $id;
        	$this->load->view("templates/header");
        	$this->load->view('templates/hotelnav', $data);
        	$this->load->view("hotel/view_request", $pa);
        	$this->load->view("templates/footer");
		}
		function confirm_reserv($id)
		{
			//echo $id;
			$this->load->model('room');
			$x = $this->room->get_info_req($id);
			print_r($x);
			$this->load->library('email');
	        $this->load->helper('email');
	        $email = $x['emailaddress'];
	        if (valid_email($email)) {
	            $config['protocol'] = "smtp";
	            $config['smtp_host'] = 'ssl://smtp.gmail.com';
	            $config['smtp_port'] = '465';
	            $config['smtp_user'] = 'portalttourism143@gmail.com';
	            $config['smtp_pass'] = 'posterpolang';
	            $config['mailtype'] = 'html';
	            $config['mailpath']	= '/usr/sbin/sendmail';
	            $config['charset'] = 'utf-8';
	            $config['newline'] = "\r\n";
	            $config['wordwrap'] = TRUE;

	            $this->email->initialize($config);

	            $this->email->from('sonitgregorio@gmail.com', 'Leyte Tourism Portal', 'sonitgregorio@gmail.com');
	            $this->email->to($email);

	            $this->email->subject($x['hotel']);
	            $this->email->message('Your Reservatoin Request Has Been Confirm By' . $x['hotel'] . ', ' . $x['address'] .  'Your Check in Date is '. $x['datereserve'] . ' And your Check Out date' . $x['check_out'] . '. Estimated Amount is '. $x['rate'] * $x['no_days'] .'. The transaction code is' . $x['transcode'] . '.');
	            $this->email->send();
	            //$this->session->set_flashdata('message', $alerta . ' Your Reservation Has been Confirmed' . $email . '</div>');.
	            $this->room->upd_room($id);
	        }else{
	            $this->session->set_flashdata('message', $this->faildemessage() . 'Invalid Email.</div>');
	       		
	        }
           redirect('/view_req/'. $x['hid']);
		}
		function cancel_reserv($id)
		{
			$this->load->model('room');
			$x = $this->room->get_info_req($id);
			print_r($x);
			$this->load->library('email');
	        $this->load->helper('email');
	        $email = $x['emailaddress'];
	        if (valid_email($email)) {
	            $config['protocol'] = "smtp";
	            $config['smtp_host'] = 'ssl://smtp.gmail.com';
	            $config['smtp_port'] = '465';
	            $config['smtp_user'] = 'sonitgregorio@gmail.com';
	            $config['smtp_pass'] = 'posterpolang';
	            $config['mailtype'] = 'html';
	            $config['mailpath']	= '/usr/sbin/sendmail';
	            $config['charset'] = 'utf-8';
	            $config['newline'] = "\r\n";
	            $config['wordwrap'] = TRUE;

	            $this->email->initialize($config);

	            $this->email->from('sonitgregorio@gmail.com', 'Leyte Tourism Portal', 'sonitgregorio@gmail.com');
	            $this->email->to($email);

	            $this->email->subject($x['hotel']);
	            $this->email->message('Your Reservatoin Request Has Been Canceled ' . $x['hotel'] . ', ' . $x['address'] . '.Because This room is not available');
	            $this->email->send();
	            //$this->session->set_flashdata('message', $alerta . ' Your Reservation Has been Confirmed' . $email . '</div>');.
	            $this->room->del_re($id);
	        }else{
	            $this->session->set_flashdata('message', $this->faildemessage() . 'Invalid Email.</div>');
	       		
	        }
           redirect('/view_req/'. $x['hid']);
		}
	}