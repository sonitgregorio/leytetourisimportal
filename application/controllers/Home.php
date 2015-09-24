<?php
  /**
   *Date : July 27, 2015
   *Main Controller
   */
  class Home extends CI_Controller
  {
    //Load Main page..
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
        $this->load->view('templates/footer.php');
    }
    function gallery()
    {
        $data['param'] = "gallery";
        $this->load->view('templates/header');
        $this->load->view('templates/usernav', $data);
        $this->load->view('home/gallery');
        $this->load->view('templates/footer.php');
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
        $this->load->view('templates/footer.php');
    }
    function visit_hotel($id)
    {
        $data['param'] = "tourist";
        $data2['hid'] = $id;
        $this->load->model('room');
        $this->load->view('templates/header');
        $this->menus($data);
        $this->load->view('hotel/visit_hotel', $data2);
        $this->load->view('templates/footer.php');
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

  }
