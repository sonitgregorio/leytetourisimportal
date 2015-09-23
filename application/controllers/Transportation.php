<?php 

	/**
	* 
	*/
	class Transportation extends CI_Controller
	{
		function faildemessage()
	    {
	        return '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
	    }
	    function successMessage()
	    {
	        return'<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
	    }
		function manage_routes()
		{

			$this->load->model('transpo');
			$data['param'] = "manage_routes";
			$this->load->view('templates/header');
			$this->load->view('templates/transpo', $data);
			$this->load->view('transpo/manage_routes');
			$this->load->view('templates/footer');
		}
		function add_route()
		{
			$this->load->model('transpo');
			$id = $this->input->post('ids');
			$from = $this->input->post('from');
			$to = $this->input->post('to');
			$rate = $this->input->post('rate');
			$data = array('frm' => $from, 'tos' => $to, 'rate' => $rate, 'owned' => $this->session->userdata('uid'));
			if ($id == "")
			{
				$x = $this->transpo->check_route($from, $to);
				if ($x > 0) 
				{
					$this->session->set_flashdata('message', $this->faildemessage() . "<strong>Route is already Exist.</strong></div>");
				}
				elseif($from == $to)
				{
					$this->session->set_flashdata('message', $this->faildemessage() . "<strong>Invalid Route.</strong></div>");
				}
				else
				{
					$this->transpo->insert_route($data);
					$this->session->set_flashdata('message', $this->successMessage() . "<strong>Route Added.</strong></div>");
				}
			}
			else
			{
				if ($from == $to) 
				{
					$this->session->set_flashdata('message', $this->faildemessage() . "<strong>Invalid Route.</strong></div>");
				}
				else
				{
					$this->transpo->up_route($id, $data);
				}
			}
			
			redirect('/manage_routes');
		}
		function del_route($id)
		{
			$this->load->model('transpo');
			$this->transpo->del_route($id);
			//$this->session->set_flashdata("message", $this->successMessage() . "<strong>Route Successfuly Deleted.</strong></div>");
			redirect('/manage_routes');
		}
		function edit_route($id)
		{
			$this->load->model('transpo');
			$data['param'] = "manage_routes";
			$x = $this->transpo->get_route_inf($id);
			$datax = array('ids' => $id, 'frm' => $x['frm'], 'tos' => $x['tos'], 'rate' => $x['rate']);
			$this->load->view('templates/header');
			$this->load->view('templates/transpo', $data);
			$this->load->view('transpo/manage_routes', $datax);
			$this->load->view('templates/footer');
		}
		function transpo_settings()
		{
			$this->load->model('transpo');
			$data['param'] = "trans_setting";
			$this->load->view('templates/header');
			$this->load->view('templates/transpo', $data);
			$this->load->view('transpo/trans_setting');
			$this->load->view('templates/footer');
		}
		function insert_trans()
		{
					$this->load->model('transpo')
			 		$trans = $this->input->post('trans');
			        $contact = $this->input->post('contact');
			        $pic = $this->input->post('picture');
			        $address = $this->input->post('address');
			        $city = $this->input->post('city');
			        $desc = $this->input->post('description');

			        $config['upload_path']          = './assets/images/transpo/';
			        $config['allowed_types']        = 'gif|jpg|png';
			        $config['encrypt_name']         = TRUE;
			        $this->load->library('upload' , $config);
			        if ( ! $this->upload->do_upload('picture'))
			        {
			            if ($this->transpo->checking_t() > 0)
			            {
			                $data = array('tourist' => $spot, 'contact' => $contact, 'address' => $address,
			                'city' => $city, 'information' => $desc);
			                $this->transpo->update_transpo($data);
			                $this->session->set_flashdata('message', $this->successMessage() . 'Updated.</div>');
			            }
			        }
			        else
			        {

			        	    $data = array('tourist' => $spot, 'contact' => $contact, 'address' => $address,
			                'city' => $city, 'information' => $desc, 'filename' =>  $this->upload->data('file_name'),
			                'owned' => $this->session->userdata('uid'));
			                $this->registration->insert_spot($data);
			                $this->session->s




			            // $checkexist = $this->registration->check_spot($spot, $address);
			            // if ($checkexist <= 0)
			            // {
			            //     $data = array('tourist' => $spot, 'contact' => $contact, 'address' => $address,
			            //     'city' => $city, 'information' => $desc, 'filename' =>  $this->upload->data('file_name'),
			            //      'owned' => $this->session->userdata('uid'));
			            //     $this->registration->insert_spot($data);
			            //     $this->session->set_flashdata('message', $this->successMessage() . 'Tourist Spot Added.</div>');
			            // }
			            // else
			            // {
			            //   $data = array('tourist' => $spot, 'contact' => $contact, 'address' => $address,
			            //   'city' => $city, 'information' => $desc, 'filename' =>  $this->upload->data('file_name'));
			            //   $this->registration->update_spot($data);
			            //     $this->session->set_flashdata('message', $this->successMessage() . 'Updated.</div>');
			            //     //$this->session->set_flashdata('message', $this->faildemessage() . 'Tourist Spot Already Exist.</div>');
			            // }
			        }






			        $data['destination'] = $city;
			        $this->session->set_flashdata('data', $data);
			        if ($this->session->userdata('usertype') != '4')
			        {
			          redirect('/manage_tourist');
			        }
			        else
			        {
			          redirect('/citytourist/' . $city);
			        }
					}
	}