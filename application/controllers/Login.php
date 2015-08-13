<?php
  class Login extends CI_Controller
  {
      function verify_login()
      {
            $suc = '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
            $alerts = '<div class="alert alert-danger"style="padding:6px"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($username == "") {
                   $this->session->set_flashdata('message', $alerts . 'Required Username.</div>');
                   redirect('/');
            }elseif ($password == "") {
              $this->session->set_flashdata('message', $alerts . 'Required Password.</div>');
              redirect('/');
            }else{
              $this->session->set_userdata('username', $username);
              $this->session->set_userdata('password', $password);
              redirect('/home');

            }
      }
      function signup()
      {
        $data['param'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/signup');
        $this->load->view('templates/footer');
      }
      function forgot(){
        $data['param'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/clientnav', $data);
        $this->load->view('pages/forgot');
        $this->load->view('templates/footer');
      }
      function submitforgot()
      {
        $suc = '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
        $alerts = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
        $alerta = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';

        $this->load->library('email');
        $this->load->helper('email');
        $email = $this->input->post('email');
        if (valid_email($email)) {
            $config['protocol'] = "smtp";
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'sonitgregorio@gmail.com';
            $config['smtp_pass'] = 'posterpolang';
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);

            $this->email->from('sonitgregorio@gmail.com', 'Leyte Tourism Portal');
            $this->email->to($email);

            $this->email->subject('Email Test');
            $this->email->message('Please click the link for the password recovery' );
            $this->email->send();
            $this->session->set_flashdata('message', $alerta . ' Password Recovery Has been Sent to ' . $email . '</div>');
        }else{
            $this->session->set_flashdata('message', $alerts . 'Invalid Email.</div>');
        }
          redirect('/forgot');
      }
      function touristspot()
      {
        $data['param'] = "tourist";
        $this->load->view("templates/header");
        $this->load->view('templates/clientnav', $data);
        $this->load->view("pages/touristspot");
        $this->load->view("templates/footer");
      }
      function tourist()
      {
        $data['param'] = "tourist";
        $this->load->view("templates/header");
        $this->load->view('templates/clientnav', $data);
        $this->load->view("tourist/tourist");
        $this->load->view("templates/footer");
      }
      function origpost(){
        echo $this->input->post('origin');
        $data['origin'] = $this->input->post('origin');
        $this->load->view('tourist/map', $data);

      }
      function citytourist()

      {
        $data['param'] = "tourist";
        $this->load->view("templates/header");
        $this->load->view('templates/clientnav', $data);
        $this->load->view("tourist/citytouristspot");
        $this->load->view("templates/footer");
      }
      function home()
      {
        $data['param'] = "home";
        $this->load->view("templates/header");
        $this->load->view('templates/usernav', $data);
        $this->load->view("home/homepage");
        $this->load->view("templates/footer");
      }
  }
