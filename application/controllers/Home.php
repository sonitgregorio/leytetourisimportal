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
        $this->load->view('templates/usernav', $data);
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

  }
