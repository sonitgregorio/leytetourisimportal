<?php
  class Login extends CI_Controller
  {
      function faildemessage()
      {
            return '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
      }
      function successMessage()
      {
          return'<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
      }
      function verify_login()
      {
            $suc = '<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
            $alerts = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($username == "")
            {
              $this->session->set_flashdata('message', $alerts . 'Required Username.</div>');
              $this->load->view('templates/user_login');
              $this->load->view('templates/script.php');
            }
            elseif ($password == "")
            {
              $this->session->set_flashdata('message', $alerts . 'Required Password.</div>');
              $this->load->view('templates/user_login');
              $this->load->view('templates/script.php');
            }
            else
            {
              $x = $this->registration->getAccount($username, $password);
              if ($x['id'] == 0)
              {
                  $this->session->set_flashdata('message', $alerts . '<strong>Invalid Username or Password.</strong></div>');
                  $this->load->view('templates/user_login');
                  $this->load->view('templates/script.php');
              }
              else
              {
                $this->session->set_userdata('usertype', $x['usertype']);
                $this->session->set_userdata('uid', $x['id']);
                echo '2';
              }
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
        if ($this->session->userdata('usertype') == "4")
        {
            $data['param'] = "touristmanagement";
            $this->load->view('templates/adminnav', $data);
        }
        else
        {
            $this->load->view('templates/clientnav', $data);
        }
        $this->load->view("pages/touristspot");
        $this->load->view("templates/footer");
      }
      function tourist($spots)
      {
        $data['param'] = "tourist";
        $data['spots'] = $spots;
        $this->load->view("templates/header");
        if ($this->session->userdata('usertype') == "4")
        {
            $data['param'] = "touristmanagement";
            $this->load->view('templates/adminnav', $data);
        }
        else
        {
            $this->load->view('templates/clientnav', $data);
        }
        $this->load->view("tourist/tourist");
        $this->load->view("templates/footer");
      }
      function origpost()
      {
        $data['origin'] = $this->input->post('spots');
        $data['destination'] = $this->input->post('origin');
        $this->load->view('tourist/map', $data);

      }
      function citytourist($destination)
      {
        $data['destination'] = $destination;
        $data['param'] = "tourist";
        $this->load->view("templates/header");
        if ($this->session->userdata('usertype') == "4")
        {
            $data['param'] = "touristmanagement";
            $this->load->view('templates/adminnav', $data);
        }
        else
        {
            $this->load->view('templates/clientnav', $data);
        }
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
      function logout()
      {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('usertype');
        redirect('/');
      }
      function register_users()
      {
        $password = $this->input->post('password');
        $username = $this->input->post('username');
        $firstname = $this->input->post('fname');
        $middlename = $this->input->post('mname');
        $lastname = $this->input->post('lname');
        $usertype = $this->input->post('usertype');
        $email = $this->input->post('email');
        $contact = $this->input->post('contact');

        $data = array('firstname'   =>  $firstname,
                      'middlename'  =>  $middlename,
                      'lastname'    =>  $lastname,
                      'email'       =>  $email,
                      'contact'     =>  $contact,
                      'username'    =>  $username,
                      'password'    =>  $password,
                      'usertype'    =>  $usertype);

        if ($password != $this->input->post('confirmpassword'))
        {
          $this->session->set_flashdata('message', $this->faildemessage() .  '<span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;<strong>Your Confirm Password does not match with your Password.</strong></div>');
          $this->load->view('templates/user_reg', $data);
        }
        else
        {
          if ($this->registration->existuser($username) >= 1)
          {
            $this->session->set_flashdata('message', $this->faildemessage() .  '<span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;<strong>Username Already Exist.</strong></div>');
            $this->load->view('templates/user_reg', $data);
          }
          else
          {
            $this->registration->insert_users($data);
            $this->session->set_flashdata('message','<div class="alert alert-success">' . $this->successMessage() .  'Registration Success.</div>');
            $this->load->view('templates/user_reg');
          }
        }
        $this->load->view('templates/script.php');
      }
  }
