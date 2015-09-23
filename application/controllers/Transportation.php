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
			$from = $this->input->post('from');
			$to = $this->input->post('to');
			$rate = $this->input->post('rate');
			$data = array('frm' => $from, 'tos' => $to, 'rate' => $rate, 'owned' => $this->session->userdata('uid'));
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
	}