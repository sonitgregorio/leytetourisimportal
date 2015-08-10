<?php
  /**
   *Date : July 27, 2015
   *Main Controller
   */
  class Main extends CI_Controller
  {
    //Load Main page..
    function index(){
      $data['param'] = "home";
      $this->load->view('templates/header');
      $this->load->view('templates/clientnav', $data);
      $this->load->view('pages/touristmain');
      $this->load->view('templates/footer.php');
    }
  }
