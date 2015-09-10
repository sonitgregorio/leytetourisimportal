<?php
/**
 * Tourist Destination Controller
 */
class Tourist extends CI_Controller
{

    function insert_tourdest()
    {
              $config['upload_path']          = '../assets/images/';
              $config['allowed_types']        = 'gif|jpg|png';
              $this->load->library('upload', $config);
              echo $this->input->post('picture');
              if ( ! $this->upload->do_upload('userfile'))
              {
                      // $error = array('error' => $this->upload->display_errors());
                      //
                      // $this->load->view('upload_form', $error);
              }
              else
              {
                      // $data = array('upload_data' => $this->upload->data());
                      // $this->load->view('upload_success', $data);
              }
    }
}
