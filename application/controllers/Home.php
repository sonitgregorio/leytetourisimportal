<?php
  /**
   *Date : July 27, 2015
   *Main Controller
   */
  class Home extends CI_Controller
  {
    //Load Main page..
    function themain()
      {
        $data['param'] = "home";
        $this->load->view("templates/header");
        if ($this->session->userdata('usertype') == '3')
        {
          $this->load->view('templates/usernav', $data);
        }
        else
        {
          $this->load->view('templates/adminnav', $data);
        }
        $this->load->view("home/homepage");
        $this->load->view("templates/footer");
      }
    function settings()
    {
        $data['param'] = "settings";
        $this->load->view('templates/header');
        $this->load->view('templates/usernav', $data);
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

  }
