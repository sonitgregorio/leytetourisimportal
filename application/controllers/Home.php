<?php
  /**
   *Date : July 27, 2015
   *Main Controller
   */
  class Home extends CI_Controller
  {
    //Load Main page..
    function faildemessage()
    {
        return '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
    }
    function successMessage()
    {
      return'<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:red"><span aria-hidden="true">&times;</span></button>';
    }
    function menus($data)
    {
       if ($this->session->userdata('usertype') == '3')
        {
          $this->load->view('templates/usernav', $data);
        }
        elseif($this->session->userdata('usertype') == '1')
        {
          $this->load->view('templates/hotelnav', $data);
        }
        elseif ($this->session->userdata('usertype') == '4') 
        {
          $this->load->view('templates/adminnav', $data);
        }
        elseif ($this->session->userdata('usertype') == '2')
        {
          $this->load->view('templates/transpo.php', $data);
        }
        elseif ($this->session->userdata('usertype') == '5') {
          $this->load->view('templates/guestnav.php', $data);
        }
        else
        {
           $this->load->view('templates/clientnav', $data);
        }
    }
    function themain()
    {
        $data['param'] = "home";
        $this->load->view("templates/header");
        $this->menus($data);
        $this->load->view("home/homepage");
        $this->load->view("templates/footer");
    }
    function settings()
    {
        $data['param'] = "settings";
        $this->load->view('templates/header');
        $this->menus($data);
        $this->load->view('home/settings');
        $this->load->view('templates/footer');
    }
    function gallery()
    {
        $data['param'] = "gallery";
        $this->load->view('templates/header');
        $this->load->view('templates/usernav', $data);
        $this->load->view('home/gallery');
        $this->load->view('templates/footer');
    }
    function admin()
    {
        $data['param'] = "home";
        $this->load->view('templates/header');
        $this->load->view('templates/adminnav', $data);
        $this->load->view('admin/adminhome');
        $this->load->view('templates/footer.php');
    }
    function manage_tourist()
    {
        $data['param'] = "manage_tourist";
        $this->load->view('templates/header');
        $this->load->view('templates/usernav', $data);
        $this->load->view('tourist/manage_tourist');
        $this->load->view('templates/footer');
    }
    function visit_hotel($id)
    {
        $data['param'] = "tourist";
        $data2['hid'] = $id;
        $this->load->model('room');
        $this->load->view('templates/header');
        $this->menus($data);
        $this->load->view('hotel/visit_hotel', $data2);
        $this->load->view('templates/footer');
    }
    function view_room($id)
    {
        $this->load->model('room');
        $data['param'] = "tourist";
        $pa['id'] = $id;
        $this->load->view("templates/header");
        $this->menus($data);
        $this->load->view("hotel/view_room", $pa);
        $this->load->view("templates/footer");
    }
    function visit_trans($id)
    {
        $this->load->model('room');
        $data['param'] = "tourist";
        $pa['id'] = $id;
        $this->load->view("templates/header");
        $this->menus($data);
        $this->load->view("tourist/visit_transpo.php", $pa);
        $this->load->view("templates/footer");
    }
    function guest()
    {

    }
    function user_logs()
    {
        $this->load->view('templates/header');
        $data['param'] = 'user_logs';
        $this->menus($data);
        // $this->load->view('hotel/hotel_log');
        $this->load->view('admin/logs');
        $this->load->view('templates/footer');   
    }
    function forgot_pass()
    {
        $this->load->view('templates/header');
        $data['param'] = 'home';
        $this->menus($data);
        $datax['chk'] = 1;
        $this->load->view('pages/forgot_pass', $datax);
        $this->load->view('templates/footer');   
    }
    function reset_pass()
    {
        $this->load->helper('string');
        $code =  strtoupper(random_string('alnum', 6));
        $checking_email = $this->registration->check_email($this->input->post('email'));
        if ($checking_email > 0) {
            $this->send_email($this->input->post('email'), $code);
            $this->load->view('templates/header');
            $data['param'] = 'home';
            $this->menus($data);
            $datax['chk'] = 2;
            $datax['em'] = $this->input->post('email');
            $this->load->view('pages/forgot_pass', $datax);
            $this->load->view('templates/footer');   
        }else{
            $this->session->set_flashdata('message', $this->faildemessage() . '<strong>Email does not exist.</strong></div>');
            $this->forgot_pass();
        }



    }
    function send_email($email, $code)
    {


            $this->load->library('email');
            $this->load->helper('email');
            if (valid_email($email)) {
                $config['protocol'] = "smtp";
                $config['smtp_host'] = 'ssl://smtp.gmail.com';
                $config['smtp_port'] = '465';
                $config['smtp_user'] = 'portalttourism143@gmail.com';
                $config['smtp_pass'] = 'posterpolang';
                $config['mailtype'] = 'html';
                $config['mailpath'] = '/usr/sbin/sendmail';
                $config['charset'] = 'utf-8';
                $config['newline'] = "\r\n";
                $config['wordwrap'] = TRUE;

                $this->email->initialize($config);

                $this->email->from('portalttourism143@gmail.com', 'Leyte Tourism Portal', 'portalttourism143@gmail.com');
                $this->email->to($email);

                $this->email->subject('Forgot Password');
                $this->email->message('Your Confirmation Code: ' . $code . '.');
                $this->email->send();
                //$this->session->set_flashdata('message', $alerta . ' Your Reservation Has been Confirmed' . $email . '</div>');.
            }else{
                $this->session->set_flashdata('emai', $this->faildemessage() . 'Invalid Email.</div>');
                
            }


            $this->db->where('email', $email);
            $this->db->update('tbl_users', array('confirmcode' => $code));
    }
    function submit_code()
    {
            $get_code = $this->registration->check_code($this->input->post('email'), $this->input->post('confirmcode'));
            if ($get_code > 0) 
            {
               $datax['chk'] = 3;
            }
            else
            {
               $datax['chk'] = 2;
               $this->session->set_flashdata('confirmcode', $this->faildemessage() . 'Invalid Confirmation Code. Please Check Your Email Address.</div>');
            }

            $this->load->view('templates/header');
            $data['param'] = 'home';
            $this->menus($data);
            $datax['em'] = $this->input->post('email');
            $this->load->view('pages/forgot_pass', $datax);
            $this->load->view('templates/footer');   
    }
    function posting_request()
    {
        $this->load->view('templates/header');
        $data['param'] = 'request';
        $this->menus($data);
        $this->load->view('pages/request_post');
        $this->load->view('templates/footer');
    }
    function appr_ann($id)
    {
        $this->load->helper('date');

        $this->registration->appr_ann($id);
        $this->registration->logs('Approve Announcement');
        redirect('/posting_request');
    }
    function delete_approve($id)
    {
        $this->registration->delete_approve($id);
        $this->registration->logs('Approve Announcement');
        redirect('/posting_request');
    }
    function submit_password()
    {
        $password = $this->input->post('password');
        $cpassword = $this->input->post('cpassword');
        $email = $this->input->post('email');

        if ($password != $cpassword) 
        {
            $datax['em'] = $email;
            $datax['chk'] = 3;
            $this->session->set_flashdata('password', $this->faildemessage() . 'Invalid Confirm Password.</div>');
        }
        else
        {
            $datax['chk'] = 4;
            $this->db->where('email', $email);
            $this->db->update('tbl_users', array('password' => $password));
            $this->session->set_flashdata('password','<div class="alert alert-success">' . $this->successMessage() . 'Password Has Been Change you can now login. <a class="btn btn-success loging" data-type="1" data-toggle="modal" data-target="#login">Login</a></div>');
        }
        $this->load->view('templates/header');
        $data['param'] = 'home';
        $this->menus($data);
        $datax['em'] = $this->input->post('email');
        $this->load->view('pages/forgot_pass', $datax);
        $this->load->view('templates/footer'); 
    }
    function search_item()
    {
        $datax['search'] =  $this->input->post('search');
        $data['param'] = "home";
        $this->load->view("templates/header");
        $this->menus($data);
        $this->load->view("home/search", $datax);
        $this->load->view("templates/footer");
    }
    function get_filter_logs()
    {
        $froms = $this->input->post('froms');
        $tos = $this->input->post('tos');
        $shows = $this->input->post('shows');
        $data = array('froms' => $froms, 'tos' => $tos, 'shows' => $shows);
        $this->load->view('admin/filter_logs', $data);
    }
  }
