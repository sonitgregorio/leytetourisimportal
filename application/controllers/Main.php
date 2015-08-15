<?php
  /**
   *Date : July 27, 2015
   *Main Controller
   */
  class Main extends CI_Controller
  {
    //Load Main page..
    function index()
    {
      if(empty($this->session->userdata('username')))
       {
        $data['param'] = "home";
        $this->load->view('templates/header');
        $this->load->view('templates/clientnav', $data);
        $this->load->view('pages/touristmain');
        $this->load->view('templates/footer.php');
      }
      else
      {
        $data['param'] = "home";
        $this->load->view("templates/header");
        $this->load->view('templates/usernav', $data);
        $this->load->view("home/homepage");
        $this->load->view("templates/footer");
      }

    }
  }
